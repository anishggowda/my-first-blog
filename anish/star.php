<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    var id;
    $(document).ready(function() {
    $('.mclass').click(function () {
        //alert ("hi");
    id = $(this).attr('id');
    alert(id);
    });
    });
</script>
</head>
<body>
<table >
    <thead>
        <tr >
            <th>Name/Nr.</th>
            <th>Street</th>
            <th>Town</th>
            <th>Postcode</th>
            <th>Country</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="mclass" id="1">50</td>
            <td class="mclass" id="2">Some Street 1</td>
            <td class="mclass" id="3">Glasgow</td>
            <td class="mclass" id="4">G0 0XX</td>
            <td class="mclass" id="5">United Kingdom</td>
            <td class="mclass" id="6">
                <button type="button" class="use-address" />
            </td >
        </tr>
        <tr>
            <td class="mclass" id="7">49</td>
            <td class="mclass" id="8">Some Street 2</td>
            <td class="mclass" id="9">Glasgow</td>
            <td class="mclass" id=10>G0 0XX</td>
            <td class="mclass" id="11">United Kingdom</td>
            <td class="mclass" id="12">
                <button type="button" class="use-address" />
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>
