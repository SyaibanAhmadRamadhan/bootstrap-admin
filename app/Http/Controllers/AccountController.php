<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use App\Utils\Helpers\FileHelper;
use App\Utils\Helpers\Transaction;
use App\Utils\Primitives\Timezone;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;

class AccountController extends Controller
{
    private string $avatarPath = "users/avatar";

    public function index()
    {
        return view('account.index');
    }

    public function setting()
    {
        return view('account.setting');
    }

    public function update(ProfileUpdateRequest $request, User $user): RedirectResponse
    {
        $data = Arr::except($request->validated(), ['avatar']);

        $request->user()->fill($request->validated());

        if (isset($data['email']) && $data['email'] !== $user->email) {
            $data['email_verified_at'] = null;
        }

        $oldImage = null;
        if ($request->hasFile('avatar')) {
            $data['avatar'] = FileHelper::optimizeAndUploadPicture($request->file('avatar'), $this->avatarPath);
            $oldImage = $user->avatar;
        }

        $res = Transaction::doTx(function () use ($request, $user, $data, $oldImage) {
            $user->update($data);
            if (isset($oldImage)) {
                FileHelper::deleteImage($this->avatarPath, $oldImage);
            }
        });

        if ($res) {
            return Redirect::back()->withInput($request->all())->with($res);
        }

        return Redirect::route('account.setting')->with([
            'status' => 'success',
            'message' => 'Profile updated successfully'
        ]);
    }
}
