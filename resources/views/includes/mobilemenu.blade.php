<div class="mobile-menu">
	<div class="footer">
		    <div class="col-xs-4 column">
					<a onclick="javascript:history.back()">
	    			<img class="menu-icon" id="backbutton" src="{{ URL::asset('icons/BackIcon.svg') }}" alt="">
	    		</a>
		    </div>
		    <div class="col-xs-4 column">
	    		<a href="{{ url('home') }}">
	    			<img class="menu-icon" src="{{ URL::asset('icons/HomeIconWhite.svg') }}" alt="">
	    		</a>
				</div>
				<div class="col-xs-4 column">
					<a href="{{ url('notifications') }}" class="notificationIcon">
						<img class="menu-icon"
						src="{{ URL::asset('icons/MessagesIconWhiteAlt.svg') }}" alt="">
						@if($notificationCount > 0)
							<span class="notificationCount">{{$notificationCount}}</span>
						@endif
					</a>
				</div>
	</div>
</div>
