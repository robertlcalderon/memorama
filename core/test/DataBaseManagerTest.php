<?php
    use PHPUnit\Framework\TestCase;
    use PHPUnit\DbUnit\TestCaseTrait;

    class DataBaseManagerTest extends TestCase{
        private $op;

        public function setUp():void{
            $this->op = new DataBaseManager();
        }

        public function testDataBase(){
            $this->assertEquals(false,$this->op->close());
        }
    }
?>