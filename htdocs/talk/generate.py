from lxml import etree
import requests
import re
import pandas as pd

session = requests.Session()


def clean_spaces(x): return re.sub(r'[ \t\n]+', ' ', x)


def make_filename(x): return re.sub(
    r'-+', '-', re.sub(r'[^a-zA-Z0-9]+', '-', x.lower()))[0:100].strip('-')


programme_page = session.get('https://foss4g.be/en/programme.php').content
programme = etree.fromstring(programme_page, parser=etree.HTMLParser())

proposal_data = pd.read_excel(
    '/home/roel/Downloads/Foss4GNL 2024 Speaker Form (Responses).ods')

template_file = ('_template.php')
with open(template_file, 'r') as f:
    template = f.read()

proposal_data['naam'] = proposal_data['naam'].str.lower()
proposal_data['titel'] = proposal_data['titel'].str.lower()


def find_abstract(speaker, title):
    r = proposal_data[proposal_data.naam == speaker.lower()]

    if len(r.index) == 1:
        return r.iloc[0].abstract

    if len(r.index) > 1:
        r = r[r.titel == title.lower()]
        if len(r.index) == 1:
            return r.iloc[0].abstract
        return None

    if len(r.index) == 0:
        r = proposal_data[proposal_data.titel == title.lower()]
        if len(r.index) == 1:
            return r.iloc[0].abstract
        return None


for slot in programme.xpath('.//div[@class="prog-slot"]'):
    for talk in slot.getchildren():
        title = speaker = lang = time = room = None

        tracks = [i for i in talk.get('class').split(
            ' ') if i.startswith('tr')]
        track = tracks[0] if len(tracks) > 0 else None

        title = clean_spaces(talk.find('.//div[@class="prog-title"]').text)
        speaker = clean_spaces(talk.find('.//div[@class="prog-speaker"]').text)

        try:
            lang = clean_spaces(
                talk.find('.//div[@class="prog-lang icon"]').text)

            lang = {
                'English': 'EN',
                'French': 'FR',
                'Dutch': 'NL'
            }.get(lang)
        except:
            continue

        day = {
            'prog-wed': 'PROG_WED',
            'prog-thu': 'PROG_THU',
            'prog-fri': 'PROG_FRI'
        }.get(talk.getparent().getparent().get('id'))

        time = clean_spaces(talk.find('.//div[@class="prog-sched icon"]').text)
        room = clean_spaces(talk.find('.//div[@class="prog-track icon"]').text)

        try:
            theme = clean_spaces(
                talk.find('.//div[@class="prog-theme icon"]').text)
            theme = f'<div class="prog-theme icon">{theme}</div>'
        except:
            theme = ''

        abstract = find_abstract(speaker, title) or ''

        with open(make_filename(title) + '.php', 'w') as output_file:
            output = template.replace('%%TITLE%%', title)
            output = output.replace('%%SPEAKER%%', speaker)
            output = output.replace('%%LANG%%', lang)
            output = output.replace('%%THEME%%', theme)
            output = output.replace('%%DAY%%', day)
            output = output.replace('%%TIME%%', time)
            output = output.replace('%%TRACK%%', track)
            output = output.replace('%%ROOM%%', room)
            output = output.replace('%%ABSTRACT%%', abstract)
            output_file.write(output)
