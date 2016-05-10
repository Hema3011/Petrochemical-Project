<script>
$("#Accident_Type").change(function()
    {

        var value = $("#Accident_Type option:selected").text();

        $.ajax({ 
            url: "Currentfile.php",
            data: {value: value},
            type: "POST",
            success: function(output) {
                    alert(output);//Here u wil get your output, You can append this where you want to display
                   }
            }
        })

});
</script>
<select name="Accident_Type" id ="Accident_Type" >
<option value="">Select ACCIDENT TYPE:</options>
<option value="1">Flammable Vapor</option>
  <option value="2">Combustible Dust Explosion and Fire</option>
  <option value="3">Chemical Manufacturing - Fire and Explosion</option>
  <option value="4">Oil and Refining - Fire and Explosion</option>
<option value="5">Chemical Distribution- Fire and Explosion</option>
<option value="6">Reactive Incident</option>
<option value="7">Community Impact</option>
<option value="8">Confined Space / Asphyxiation</option>
<option value="9">Hot Work - Explosion and Fire</option>
<option value="10">Release</option>