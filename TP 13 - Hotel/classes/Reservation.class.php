<?php

namespace classes;

use DateTime;
use interfaces\Billeable;
use Enums\Status;

class Reservation implements Billeable
{
    private int $id;

    private Room $room;

    private Customer $customer;
    private DateTime $startDate;
    private DateTime $endDate;

    private Status $status;

    public function __construct(int $id, Room $room, Customer $customer, DateTime $startDate, DateTime $endDate, Status $status)
    {
        $this->id = $id;
        $this->room = $room;
        $this->customer = $customer;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->status = $status;

        if ($this->room->isAvailable($startDate, $endDate)) {
        } else {
            throw new ReservationConflictException("Cette chambre est déjà réservée sur ces dates !");
        }
    }

    public function calculateAmount(): float
    {
        return $this->room->getPrice() * $this->getDurationInNights();
    }

    /**
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    /**
     * @return DateTime
     */
    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }

    public function cancel(): void
    {
        $this->status = status::Canceled;
    }

    public function getDurationInNights(): int
    {
        $interval = $this->startDate->diff($this->endDate);
        return $interval->days;
    }
}