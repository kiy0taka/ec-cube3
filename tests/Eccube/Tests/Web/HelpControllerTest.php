<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */


namespace Eccube\Tests\Web;

class HelpControllerTest extends AbstractWebTestCase
{

    /**
     * 特定商取引法のテスト
     */
    public function testRoutingHelpTradelaw()
    {
        $client = $this->createClient();
        $client->request('GET', $this->app['url_generator']->generate('help_tradelaw'));
        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    /**
     * 当サイトについてのテスト
     */
    public function testRoutingHelpAbout()
    {
        $client = $this->createClient();
        $client->request('GET', $this->app['url_generator']->generate('help_about'));
        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    /**
     * ご利用ガイドのテスト
     */
    public function testRoutingHelpGuide()
    {
        $client = $this->createClient();
        $client->request('GET', $this->app['url_generator']->generate('help_guide'));
        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    /**
     * プライバシーポリシーのテスト
     */
    public function testRoutingHelpPrivacy()
    {
        $client = $this->createClient();
        $client->request('GET', $this->app['url_generator']->generate('help_privacy'));
        $this->assertTrue($client->getResponse()->isSuccessful());
    }
}
