<?php
/**
 * StoreApiInterfaceTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server\Tests\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Produkt Katalog
 *
 * This API will be used by e-commerce users who wish to perform better.
 *
 * OpenAPI spec version: 1.0.1
 * Contact: apiteam@infoenter.com.br
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Server\Tests\Api;

use Swagger\Server\Configuration;
use Swagger\Server\ApiClient;
use Swagger\Server\ApiException;
use Swagger\Server\ObjectSerializer;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * StoreApiInterfaceTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Server\Tests\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StoreApiInterfaceTest extends WebTestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for deleteOrder
     *
     * Delete purchase order by ID.
     *
     */
    public function testDeleteOrder()
    {
        $client = static::createClient();

        $path = '/store/order/{orderId}';
        $pattern = '{orderId}';
        $data = $this->genTestData('\d+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('DELETE', $path);
    }

    /**
     * Test case for getInventory
     *
     * Returns product inventories by status.
     *
     */
    public function testGetInventory()
    {
        $client = static::createClient();

        $path = '/store/inventory';

        $crawler = $client->request('GET', $path);
    }

    /**
     * Test case for getOrderById
     *
     * Find purchase order by ID.
     *
     */
    public function testGetOrderById()
    {
        $client = static::createClient();

        $path = '/store/order/{orderId}';
        $pattern = '{orderId}';
        $data = $this->genTestData('\d+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('GET', $path);
    }

    /**
     * Test case for placeOrder
     *
     * Place an order for a product.
     *
     */
    public function testPlaceOrder()
    {
        $client = static::createClient();

        $path = '/store/order';

        $crawler = $client->request('POST', $path);
    }

    protected function genTestData($regexp)
    {
        $grammar  = new \Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
        $compiler = \Hoa\Compiler\Llk\Llk::load($grammar);
        $ast      = $compiler->parse($regexp);
        $generator = new \Hoa\Regex\Visitor\Isotropic(new \Hoa\Math\Sampler\Random());

        return $generator->visit($ast); 
    }
}
