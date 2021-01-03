<?php

namespace AppKit\:package_name_php\Tests;

use AppKit\:package_name_php\Tests\Models\Article;
class ExampleTest extends TestCase
{
    /** @test */
    public function trueIsTrue()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function artcilesCanBeLoaded()
    {
        $articles = factory(Article::class, 5)->make();

        $this->assertEquals(5, Article::count());
    }


}
