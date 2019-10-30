<?php

class MatrixSumTest extends TestCase
{
    public function testsCase1()
    {
        // Arrange
        $arr = [[0, 1, 1, 2],
                [0, 5, 0, 0],
                [2, 0, 3, 3], ];

        // Act
        $this->post('api/matrix/sum', $arr);
        // Assert

        // status should be 200
        $this->assertEquals(200, $this->response->status());

        $this->assertEquals(9, $this->response->getContent());
    }

    public function testsCase2()
    {
        // Arrange
        $arr = [[1, 1, 1, 0],
                [0, 5, 0, 1],
                [2, 1, 3, 10], ];

        // Act
        $this->post('api/matrix/sum', $arr);
        // Assert

        // status should be 200
        $this->assertEquals(200, $this->response->status());

        $this->assertEquals(9, $this->response->getContent());
    }

    public function testsCase3()
    {
        // Arrange
        $arr = [[1, 1, 1],
                [2, 2, 2],
                [3, 3, 3], ];
        $expect = 18;

        // Act
        $this->post('api/matrix/sum', $arr);

        // Assert
        $this->assertEquals(200, $this->response->status());
        $this->assertEquals($expect, $this->response->getContent());
    }

    public function testsCase4()
    {
        // Arrange
        $arr = [[0]];
        $expect = 0;

        // Act
        $this->post('api/matrix/sum', $arr);

        // Assert
        $this->assertEquals(200, $this->response->status());
        $this->assertEquals($expect, $this->response->getContent());
    }

    public function testsCase5()
    {
        // Arrange
        $arr = [[1, 0, 3],
                [0, 2, 1],
                [1, 2, 0], ];
        $expect = 5;

        // Act
        $this->post('api/matrix/sum', $arr);

        // Assert
        $this->assertEquals(200, $this->response->status());
        $this->assertEquals($expect, $this->response->getContent());
    }

    public function testsCase6()
    {
        // Arrange
        $arr = [[1],
                [5],
                [0],
                [2], ];
        $expect = 6;

        // Act
        $this->post('api/matrix/sum', $arr);

        // Assert
        $this->assertEquals(200, $this->response->status());
        $this->assertEquals($expect, $this->response->getContent());
    }

    public function testsCase7()
    {
        // Arrange
        $arr = [[1, 2, 3, 4, 5]];
        $expect = 15;

        // Act
        $this->post('api/matrix/sum', $arr);

        // Assert
        $this->assertEquals(200, $this->response->status());
        $this->assertEquals($expect, $this->response->getContent());
    }

    public function testsCase8()
    {
        // Arrange
        $arr = [[2],
        [5],
        [10], ];
        $expect = 17;

        // Act
        $this->post('api/matrix/sum', $arr);

        // Assert
        $this->assertEquals(200, $this->response->status());
        $this->assertEquals($expect, $this->response->getContent());
    }

    public function testsCase9()
    {
        // Arrange
        $arr = [[4, 0, 1],
                [10, 7, 0],
                [0, 0, 0],
                [9, 1, 2], ];
        $expect = 15;

        // Act
        $this->post('api/matrix/sum', $arr);

        // Assert
        $this->assertEquals(200, $this->response->status());
        $this->assertEquals($expect, $this->response->getContent());
    }

    public function testsCase10()
    {
        // Arrange
        $arr = [[1]];
        $expect = 1;

        // Act
        $this->post('api/matrix/sum', $arr);

        // Assert
        $this->assertEquals(200, $this->response->status());
        $this->assertEquals($expect, $this->response->getContent());
    }
}
