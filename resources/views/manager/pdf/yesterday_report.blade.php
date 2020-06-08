

<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">customer Name</th>
      <th scope="col">Customer Phone</th>
      <th scope="col">Customer address</th>
      <th scope="col">Total ammount</th>
      <th scope="col">Total Due</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $total_ammount=0; $total_due=0; ?>
    @foreach($yesterday as $v_yesterday)
    <tr>
      <th>{{$loop->index +1}}</th>
      <td>{{$v_yesterday->customer->customer_name}}</td>
      <td>{{$v_yesterday->customer->customer_phone}}</td>
      <td>{{$v_yesterday->customer->customer_address}}</td>
      <td>{{$v_yesterday->total_ammount}}</td>
      <?php
          $total_ammount +=$v_yesterday->total_ammount;
          $total_due +=$v_yesterday->due;
         ?>
      <td>{{$v_yesterday->due}}</td>
      <td>
        <a href="{{url('manager/order/report/order/'.$v_yesterday->id)}}">View</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="float-right  mr-5 mt-5">
<strong>Yesterday Sell Ammount:{{$total_ammount}}Tk</strong><br>
<strong>Yesterday Due:{{$total_due}}Tk</strong>
</div>
