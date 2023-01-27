<?php
namespace App\Jobs;

use Illuminate\Http\Request;
use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;

class ProcessWebhookJob extends SpatieProcessWebhookJob
{
    public function handle(Request $request)
    {

        logger($request->all());
        logger($this->webhookCall);
        sleep(1);
        logger("I am done");
    }
}
