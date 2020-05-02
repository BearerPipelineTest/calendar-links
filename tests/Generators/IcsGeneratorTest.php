<?php

namespace Spatie\CalendarLink\Test;

use Spatie\CalendarLinks\Test\TestCase;

class IcsGeneratorTest extends TestCase
{
    /** @test */
    public function it_can_generate_an_ics_link()
    {
        $this->assertMatchesSnapshot(
            $this->createLink()->ics()
        );
    }

    /** @test */
    public function it_can_generate_an_ics_link_with_custom_uid()
    {
        $this->assertMatchesSnapshot(
            $this->createLink()->ics(['uid' => 'random-uid'])
        );
    }

    /** @test */
    public function it_can_generate_an_ics_multiple_days_link()
    {
        $this->assertMatchesSnapshot(
            $this->createMultipleDaysLink()->ics()
        );
    }

    /** @test */
    public function it_can_generate_an_ics_allDay_link()
    {
        $this->assertMatchesSnapshot(
            $this->createAlldayLink()->ics()
        );
    }
}
