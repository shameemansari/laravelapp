<?php

namespace App\Enums;

enum PostStatus: string
{
    case COMPLETE = "completed";
    case PROCESSING = "processing";
    case CANCEL = "cancelled";
}
