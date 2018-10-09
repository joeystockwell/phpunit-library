<?php
    declare(strict_types=1);

    use PHPUnit\Framework\TestCase;


    final class ReservationTest extends TestCase {

        public function testValidInstance() {
            $reservation = new Reservation('Joey Sam', new \DateTime('+2 day'));
            $this->assertInstanceOf(Reservation::class, $reservation);

        }

        public function testInvalidInstanceDate() {
            $this->expectException(\InvalidArgumentException::class);
            $reservation = new Reservation("Joey Sam", new \DateTime("-10 days"));

        }

        public function testInvalidInstanceName() {
            $this->expectException(\InvalidArgumentException::class);
            $reservation = new Reservation("23", new \DateTime("+2 days"));

        }


        public function testValidNumberOfPlayers() {
            $reservation = new Reservation("joey Sam", new \DateTime('+2 days'));
            $reservation->setNumberOfPlayers(4);
            $this->assertEquals(4, $reservation->getNumberOfPlayers());
            $reservation->setNumberOfPlayers(2);
            $this->assertEquals(2, $reservation->getNumberOfPlayers());
        }

        public function testInvalidNumberOfPlayers() {
            $reservation = new Reservation("joey Sam", new \DateTime('+2 days'));
            for ($i = 0; $i <= 12; $i++) {
                if ($i == 2 || $i == 4) {
                    continue;
                }
                $this->expectException(\InvalidArgumentException::class);
                $reservation->setNumberOfPlayers(3);
            }
        }
    }
