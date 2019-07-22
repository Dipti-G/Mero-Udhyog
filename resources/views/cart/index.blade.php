@extends('layout.main')

@section('content')
    <div class="row" style="padding-top: 100px;">
        <h3>Cart Items</h3>


        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>qty</th>
                <th>size</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <td>
                Banana
            </td>
            <td>
                120
            </td>
            <td>
                1
            </td>

            </tbody>
            <tbody>
            <td>
                Beetroot
            </td>
            <td>
                150
            </td>
            <td>
                1
            </td>

            </tbody>
            <tbody>
            <td>
                Rustic Cup
            </td>
            <td>
                300
            </td>
            <td>
                1
            </td>

            </tbody>
        </table>
 <h2> Total:570</h2>


        <a href="{{'front.home'}}" class="button">Checkout</a>
    </div>

<style>

</style>

@endsection