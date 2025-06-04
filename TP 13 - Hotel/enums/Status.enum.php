<?php

namespace Enums;

enum status: string
{
    case Canceled = 'canceled';
    case Pending = 'pending';
    case Confirmed = 'confirmed';
    case Completed = 'completed';
}