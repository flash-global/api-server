<?php
    
    namespace Tests\ApiServer\Fractal\Paginator;
    
    
    use Codeception\Test\Unit;
    use Fei\ApiServer\Fractal\Paginator\CustomPaginatorAdapter;
    use Fei\ApiServer\Fractal\Paginator\Exception;

    class CustomPaginatorAdapterTest extends Unit
    {
        public function testLastPageComputation()
        {

            $paginator = new CustomPaginatorAdapter(1, 10, 10, 37);

            $this->assertEquals(4, $paginator->getLastPage());

            $paginator->setTotal(7);

            $this->assertEquals(1, $paginator->getLastPage());

        }

        public function testPageUrlBuildingBasedOnCurrentUrl()
        {
            $paginator = new CustomPaginatorAdapter(1, 10, 10, 37);
            $_SERVER['REQUEST_URI'] = '/api/test?page=4&filter=value';
            $_SERVER['HTTP_HOST'] = 'test.com';

            $this->assertEquals("http://test.com/api/test?page=5&filter=value", $paginator->getUrl(5));
        }

        public function testPageUrlBuildingBasedOnArbitraryUrl()
        {
            $paginator = new CustomPaginatorAdapter(1, 10, 10, 37);
            $paginator->setUrl('http://test.com/api/test?page=4&filter=value');

            $this->assertEquals("http://test.com/api/test?page=5&filter=value", $paginator->getUrl(5));
        }

        public function testPageUrlBuildingBasedOnArbitraryUrlWitDefaultValues()
        {
            $paginator = new CustomPaginatorAdapter(1, 10, 10, 37);

            $paginator->setUrl('http://test.com/api/test');
            $this->assertEquals("http://test.com/api/test?page=5", $paginator->getUrl(5));

            $paginator->setUrl('http://test.com/api/test?any=param');
            $this->assertEquals("http://test.com/api/test?any=param&page=5", $paginator->getUrl(5));
        }

        public function testPerPageCannotBeLowerThanOne()
        {
            $this->expectException(Exception::class);
            new CustomPaginatorAdapter(1, 0, 10, 37);
        }
    }
