<?php

namespace App\Mail;

use App\Models\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GeneralMail extends Mailable
{
    use Queueable, SerializesModels;

    public Project $project;

    public array $recipient;

    /**
     * Create a new message instance.
     */
    public function __construct(Project $project, array $recipient)
    {
        $this->project = $project;
        $this->recipient = $recipient;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '¡Idea General!',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.idea.general',
            with: [
                'recipientName' => $this->recipient['name'],
                'recipientRole' => $this->recipient['role'],
                'projectTitle' => $this->project->title,
                'evaluationCriteria' => $this->project->evaluation_criteria,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
