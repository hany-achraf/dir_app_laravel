<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\User;

class WishlistController extends Controller {
    public function show($user_id) {
        return User::findOrFail($user_id, ['id'])->businesses;
    }
}
