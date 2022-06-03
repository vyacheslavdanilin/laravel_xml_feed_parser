<?php

namespace Tests\Feature;

use Illuminate\Http\Response;
use Tests\TestCase;

class ParserTest extends TestCase
{
    
    /**
     * @return void
     */
    public function test_parse_xml_from_external_url_fail_response(): void
    {
        $this->get(route('v2.api.parsexml'))
            ->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);

        $this->get(route('v2.api.parsexml', ['url' => '/var/www']))
            ->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);
    }

}
