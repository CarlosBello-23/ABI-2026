<?php

namespace App\Mail;

use App\Models\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class IdeaRejectedMail extends Mailable
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
            subject: '¡Tú idea de proyecto ha sido rechazada!',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.idea.rejected',
            with: [
                'recipientName' => $this->recipient['name'],
                'recipientRole' => $this->recipient['role'],
                'projectTitle' => $this->project->title,
                'evaluationCriteria' => $this->project->evaluation_criteria,
            ]
        );
    }
}
