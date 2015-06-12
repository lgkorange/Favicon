<h1>Favicon PHP class</h1>

<p>
	With the Favicon class you can get a favicon image by a given URL. Favicon receives the image from the Google service and stores it in
	a local database in form of a Base64 code.
</p>

<h2>Why not use the Google service directly?</h2>

<p>
	If you want to get lots of favicon images it could take a long time to request the service for each URL.<br>
	Instead with this class the favicon stays cached in your database.
</p>

<h2>Define how often a favicon should get refreshed</h2>

<p>
	With the <code>$priority</code> property you can specify how often a cached favicon image should get refreshed by the Google service.<br>
	By default it is set to 30 days.
</p>

<h1>How to use it</h2>

<p>
	Favicon uses a MySQL database. In the <code>src</code> folder you'll find the exported <code>.sql</code> files.<br>
	Import them so you can use it.
</p>

<h2>Initialize a Favicon object</h2>

<pre>
	&lt;?php
		$myBlogFavicon = new Favicon("http://blog.lgk.io");
	?&gt;
	&lt;img src="&lt;?php echo $myBlogFavicon->image; ?&gt;" alt="Favicon"&gt;
</pre>