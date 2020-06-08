


<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">customer Name</th>
      <th scope="col">Customer Phone</th>
      <th scope="col">Customer address</th>
      <th scope="col">Total ammount</th>
      <th scope="col">Total Due</th>
    </tr>
  </thead>
  <tbody>
    <?php $total_ammount=0; $total_due=0; ?>
    @foreach($month_order as $v_month)
    <tr>
      <th>{{$loop->index +1}}</th>
      <td>{{$v_month->customer->customer_name}}</td>
      <td>{{$v_month->customer->customer_phone}}</td>
      <td>{{$v_month->customer->customer_address}}</td>
      <td>{{$v_month->total_ammount}}</td>
      <?php
        $total_ammount +=$v_month->total_ammount;
        $total_due +=$v_month->due;
       ?>
      <td>{{$v_month->due}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="float-right  mr-5 mt-5">
  <strong>Month Ammount:{{$total_ammount}}Tk</strong><br>
  <strong>Month Due:{{$total_due}}Tk</strong>
</div>
