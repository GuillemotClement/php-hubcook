<?php


namespace Hubcook\Tests\Helper;

use PHPUnit\Framework\TestCase;
use Hubcook\Helper\DisplayHelper;

class DisplayHelperTest extends TestCase
{
  /**
   * @test
   */
  public function print_should_output_formatted_string(): void
  {
    // Arrange
    $value = "test";
    $expectedOutput = "<pre>";

    // Act
    ob_start(); // Démarre la capture de sortie
    DisplayHelper::print($value);
    $output = ob_get_clean(); // Récupère et arrête la capture

    // Assert
    $this->assertStringContainsString($expectedOutput, $output);
    $this->assertStringContainsString('string(4) "test"', $output);
  }

  /**
   * @test
   */
  public function printAndDie_should_output_formatted_string_and_exit(): void
  {
    // Arrange
    $value = "test";
    $expectedOutput = "<pre>";

    // Act & Assert
    $this->expectOutputString($expectedOutput . 'string(4) "test"' . "</pre>");

    // On s'attend à ce que la méthode termine l'exécution
    $this->expectException(\PHPUnit\Framework\Exception::class);

    DisplayHelper::printAndDie($value);
  }
}
