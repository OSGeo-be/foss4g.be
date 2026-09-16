export interface Sponsor {
  name: string
  link: string
  logo: string
  bgClass: string
  imgClass?: string
}

export interface SponsorsData {
  gold: Sponsor[]
  silver: Sponsor[]
  bronze: Sponsor[]
}