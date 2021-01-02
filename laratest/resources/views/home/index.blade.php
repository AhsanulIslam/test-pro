
@include('home.admin_header');

	<h1 align="center">Welcome Home - {{$username}}</h1>
	<br>

<div align="center">
	<table">
		<tr>
			<td>
				<div class="card">
				<span class="text-white"> Total jobs available <br>
					{{-- <%= userlist[0].t_c %> --}}
					
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Total buyers <br>
				 	{{count($t_c)}}
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Total freelancer <br>
					{{-- <%= fc[0].t_c %> --}}
				</span>
				</div>
			</td>
		</tr>
	</table>
</div>


</body>
</html>