<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Wink\WinkAuthor;

class Welcome extends Notification
{
    use Queueable;

    protected $author;

    public function __construct(WinkAuthor $author)
    {
        $this->author = $author;
    }

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
                    ->subject('Welcome to FullStackWorld!')
                    ->greeting('Hey '.$this->author->name.'!')
                    ->line('Welcome to FullStackWorld - we\'re a community of developers who wish to share stories with others.')
                    ->action('Your Profile', url('/wink/team/'.$this->author->slug))
                    ->line('Any questions, just reply to this email and we’ll get right back to you!');
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
