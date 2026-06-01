<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TransferConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $confirmationUrl;
    public string $expiresAt;

    public function __construct(string $token, string $expiresAt)
    {
        // Buat URL konfirmasi lengkap dengan token
        $this->confirmationUrl = route('transfer.confirm', ['token' => $token]);
        $this->expiresAt = $expiresAt;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Konfirmasi Jabatan Ketua Jurusan - PRISM',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.transfer-confirmation',
        );
    }
}