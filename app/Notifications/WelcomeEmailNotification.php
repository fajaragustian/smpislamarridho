<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;

class WelcomeEmailNotification extends Notification
{
    use Queueable;
    private $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( User $user)
    {
        $this->user = $user;
    }

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('SMP ISLAM AR RIDHO')
                    ->greeting('Hello, '.$this->user->name)
                    ->line('Terima Kasih telah mendaftar ekskul'.$this->user->ekskul->name)
                    ->action('Bergabung', url('https://t.me/+s4awv5_u_cY1MmI9'))
                    ->line('Silahkan gabung grup untuk informasi lebih lanjut mengenai sepurtar ekskul');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
