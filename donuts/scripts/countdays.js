			    <script>
					var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")

					function countup(yr,m,d){
						var today=new Date()
						var todayy=today.getYear()
						if (todayy < 1000)
						todayy+=1900
						var todaym=today.getMonth()
						var todayd=today.getDate()
						var todaystring=montharray[todaym]+" "+todayd+", "+todayy
						var paststring=montharray[m-1]+" "+d+", "+yr
						var difference=(Math.round((Date.parse(todaystring)-Date.parse(paststring))/(24*60*60*1000))*1)
						difference+=" days"
						document.write("<h1>Time since Alison\'s last donut:</h1> <span>"+difference+"</span>")
					}
					//enter the count up date using the format year/month/day
					countup(2014,06,27)
				</script>