@extends('main')
@section("content")
<div class="custom-product m-4">
     <div class="col-sm-10">
        <table class="table">
         
            <tbody>
              <tr>
                <td>Amount</td>
              <td>Rs. {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>Rs. 0</td>
              </tr>
              <tr>
                <td>Delivery </td>
                <td>Rs. 100</td>
              </tr>
              <tr>
                <td>Total Amount</td>
              <td>Rs. {{$total+100}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>online payment</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-success">Order Now</button>
              </form>
          </div>
     </div>
</div>
@endsection 