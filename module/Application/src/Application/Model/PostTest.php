<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Model;

use Core\Test\ModelTestCase;
use Application\Model\Post;
use Zend\InputFilter\InputFilterInterface;


/**
 * Description of PostTest
 *
 * @author walberjefferson
 */
class PostTest extends ModelTestCase {
    public function testGetInputFilter(){
        $post = new Post();
        $if = $post->getInputFilter();
        $this->assertInstanceOf("Zend\InputFilter\InputFilter", $if);
        return $if;
    }
    
    public function testInputFiterValid($if){
        $this->assertEquals(4, $if->count());
        $this->assertTrue($if->has('id'));
        $this->assertTrue($if->has('title'));
        $this->assertTrue($if->has('description'));
        $this->assertTrue($if->has('post_date'));
    }
}
