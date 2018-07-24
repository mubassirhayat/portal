<?php

namespace Tests\Components\Queries;

use Tests\TestCase;
use App\Models\Subscription;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SubscriptionTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_can_get_a_subscription_by_its_uuid()
    {
        $uuid = factory(Subscription::class)->create()->uuid();

        $subscription = Subscription::findByUuidOrFail($uuid);

        $this->assertEquals($uuid, $subscription->uuid());
    }
}
