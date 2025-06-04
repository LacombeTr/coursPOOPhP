<?php

namespace classes;

use DateTime;
use enums\TypeChambre;

class Room
{
    private int $id;
    private string $number;
    private TypeChambre $type;

    public float $pricePerNight;

    private array $reservations = [];

    public function __construct(int $id, string $number, TypeChambre $type, int $pricePerNight)
    {
        $this->id = $id;
        $this->number = $number;
        $this->type = $type;
        $this->pricePerNight = $pricePerNight;
    }

    /** Permet d'ajouter une réservation à une chambre
     * @param Reservation $reservation
     * @return void
     * @throws ReservationConflictException
     */
    public function addReservation(Reservation $reservation): void
    {
        $this->reservations[] = $reservation;
    }

    /** Permet de remonter le calendrier de réservations de la chambre par son ID
     * @param int $id
     * @return Reservation
     */
    public function getReservationsById(int $id): Reservation
    {
        return $this->reservations[$id];
    }

    /** Vérifie si la chambre n'a pas de réservation sur le créneau indiqué
     * @param DateTime $start
     * @param DateTime $end
     * @return bool
     */
    public function isAvailable(DateTime $start, DateTime $end): bool
    {
        foreach ($this->reservations as $reservation) {
            $resStart = $reservation->getStartDate();
            $resEnd = $reservation->getEndDate();

            if ($start < $resEnd && $end > $resStart) {
                return false;
            }
        }

        return true;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->pricePerNight;
    }
}