<?php

namespace App\Console\Commands;

use App\Models\Domain;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reminders';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $domains = Domain::all();

        foreach ($domains as $domain) {
            $endDate = Carbon::parse($domain->end_date);
            $today = Carbon::now();

            $daysDifference = $today->diffInDays($endDate);

            if ($daysDifference <= 14) {
                // Wysyłanie e-maila z przypomnieniem
                Mail::send('emails.reminder', ['daysDifference' => $daysDifference], function ($message) {
                    $message->to('marekgacek45@gmail.com')->subject('Przypomnienie');
                });

                // Dodatkowa logika lub aktualizacja modelu, jeśli to konieczne
                // $domain->update(['some_column' => 'some_value']);
            }
        }

        $this->info('Przypomnienia wysłane pomyślnie.');
    }
}
