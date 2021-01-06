
@include('home.free_header');

	<h1 align="center">Welcome Home - {{$username}}</h1>
	<br>

<div align="center">
	<table>
		<tr>
			<td>
				<div class="card">
				<span class="text-white"> Total jobs applied <br>
					{{$countjob}}
					
				</span>
				</div>
			</td>
			<td>
			<input type="text">
			</td>
			<td>
				
			</td>
		</tr>
	</table>
</div>


</body>
</html>