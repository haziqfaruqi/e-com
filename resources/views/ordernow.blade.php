@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <thead>
                <tr>
                    <th>Amount</th>
                    <th>$ {{ $total }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>{{ $total +10}}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form action="/action_page.php">
                <div class="form-group">
                  <textarea type="email" placeholder="enter your address" class="form-control" id="email"></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" name="payment"><span> Online Payment</span> <br> <br>
                  <input type="radio" name="payment"><span> EMI Payment</span> <br> <br>
                  <input type="radio" name="payment"><span> Cash on Delivery</span> <br> <br>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>
        </div>
    </div>
</div>

@endsection