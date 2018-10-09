<?php
    declare(strict_types=1);

    class Reservation {

        protected $name;
        protected $bookingDateTime;
        protected $numberOfPlayers;


        public function __construct(string $name, \DateTime $bookingDateTime) {
            $this->setName($name);
            $this->setBookingDateTime($bookingDateTime);
        }

        public function getNumberOfPlayers() {
            return $this->numberOfPlayers;
        }

        public function setNumberOfPlayers(int $numberOfPlayers): void {
            if ($numberOfPlayers === 4 || $numberOfPlayers === 2) {
                $this->numberOfPlayers = $numberOfPlayers;
            } else {
                throw new \InvalidArgumentException("Number can only be 2 or 4");
            }
        }

        public function getName() {
            return $this->name;
        }

        //TODO: Validation could be better here for example $name = '   ' would be accepted
        public function setName(string $name): void {
            if (preg_match('/[0-9]/', $name) || $name === "") {
                throw new \InvalidArgumentException("Name contains number or is empty.");
            }
            $this->name = $name;
        }

        public function getBookingDateTime() {
            return $this->bookingDateTime;
        }

        public function setBookingDateTime($bookingDateTime): void {
            if ($bookingDateTime < new \DateTime("+1 day")) {
                throw new \InvalidArgumentException();
            }
            $this->bookingDateTime = $bookingDateTime;
        }


    }
