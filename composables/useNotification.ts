import { useState } from '#app'

export type NotificationPayload = {
    message: string;
    persistent?: boolean;
    duration?: number;
    variant?: string; // 'success' | 'error' | 'info';
}

export const useNotification = () =>
    useState<NotificationPayload | null>('notification', () => null)
