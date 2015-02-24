<?php
/* @var $this yii\web\View */
?>
<table class="table table-striped">
	<thead>
        <tr>
           <th>#</th>
           <th>Header</th>
           <th>Header</th>
           <th>Header</th>
           <th>Header</th>
        </tr>
    </thead>
	<tbody>
		<tr>
            <td>1,015</td>
            <td>sodales</td>
            <td>ligula</td>
            <td>in</td>
        	<td>libero</td>
		</tr>
		<tr>
            <td>1,015</td>
            <td>sodales</td>
            <td>ligula</td>
            <td>in</td>
        	<td>libero</td>
		</tr>
	</tbody>
</table>

<textarea class="ckeditor" id="editor1" name="editor1">test</textarea>
<div id="editor1" contenteditable="true">
    <h1>Inline Editing in Action!</h1>
    <p>The "div" element that contains this text is now editable.
</div>
<script>

//Checks whether CKEDITOR is defined or not
if (typeof CKEDITOR != "undefined") {
	// We need to turn off the automatic editor creation first.
// 	CKEDITOR.disableAutoInline = true;
    CKEDITOR.inline( 'editor1' );
//     CKEDITOR.on('instanceReady', function() {;
// 	var iframe = $('#cke_editable_area iframe').contents ();
// 	iframe.find ('html').css ({
// 		'background-color': '#b0b0b0'
// 	});
// 	iframe.find ('body').css ({
// 		'width': '297mm',
// 		'height': '420mm', //was 210 ****
// 		'background-color': '#ffffff',
// 		'margin': '0mm',
// 		'padding': '5mm'
// 	});
// 	iframe.find ('td').css ({
// 		'padding': '-1px'
// 	});
// });
}
	
</script>