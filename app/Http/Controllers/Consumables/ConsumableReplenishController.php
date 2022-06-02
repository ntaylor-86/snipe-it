<?php

namespace App\Http\Controllers\Consumables;

use App\Events\CheckoutableCheckedOut;
use App\Http\Controllers\Controller;
use App\Models\Consumable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ConsumableReplenishController extends Controller
{
    /**
     * Return a view to replenish a consumable stock level.
     *
     * @author [ntaylor-86] [https://github.com/ntaylor-86]
     * @see ConsumableReplenishController::update() method that updated the data.
     * @since [v6.0.2]
     * @param int $consumableId
     * @return \Illuminate\Contracts\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create($consumableId)
    {
        // return 'show the replenish form here!';

        if (is_null($consumable = Consumable::find($consumableId))) {
            return redirect()->route('consumables.index')->with('error', trans('admin/consumables/message.does_not_exist'));
        }
        $this->authorize('checkout', $consumable);

        return view('consumables/replenish', compact('consumable'));
    }

    /**
     * Updated the consumable qty
     *
     * @author [ntaylor-86] [https://github.com/ntaylor-86]
     * @see ConsumableCheckoutController::create() method that returns the form.
     * @since [v6.0.2]
     * @param int $consumableId
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(Request $request, $consumableId)
    {
        if (is_null($consumable = Consumable::find($consumableId))) {
            return redirect()->route('consumables.index')->with('error', trans('admin/consumables/message.not_found'));
        }

        $this->authorize('checkout', $consumable);

        // Update the consumable qty
        $consumable->qty = ($consumable->qty + intval($request->input('add_qty')));
        
        if ($consumable->save()) {
            return redirect()->route('consumables.index')->with('success', 'Consumable replenished successfully');
        }

        // event(new CheckoutableCheckedOut($consumable, $user, Auth::user(), $request->input('note')));
        
        return redirect()->back()->withInput()->withErrors($consumable->getErrors());
    }
}
