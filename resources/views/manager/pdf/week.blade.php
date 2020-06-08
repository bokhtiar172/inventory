
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
    @foreach($week as $v_week)
    <tr>
      <th>{{$loop->index +1}}</th>
      <td>{{$v_week->customer->customer_name}}</td>
      <td>{{$v_week->customer->customer_phone}}</td>
      <td>{{$v_week->customer->customer_address}}</td>
      <td>{{$v_week->total_ammount}}</td>
      <?php
          $total_ammount +=$v_week->total_ammount;
          $total_due +=$v_week->due;
         ?>
      <td>{{$v_week->due}}</td>

    </tr>
    @endforeach
  </tbody>
</table>

<div class="float-right  mr-5 mt-5">
<strong>Week sell Ammount:{{$total_ammount}}Tk</strong><br>
<strong>Week Due:{{$total_due}}Tk</strong>
</div>
