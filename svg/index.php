<php>
<head>
	<title>SVG</title>
	<link rel = "stylesheet" href = "style.css"	>
</head>
<body>
        <svg class="LineCircle">
            <circle cx="100" cy="150" r="60" fill="black" />
			<line x1="60" y1="196" x2="144" y2="110" stroke="Red" stroke-width="5"/>
            <circle cx = "80" cy = "125" r="15" fill = "red" stroke-width="1" stroke = "red"/>
            <circle cx = "120" cy = "178" r="15" fill = "red" stroke-width="1" stroke = "red"/>
        </svg>
        <svg class = "RectCircle">
            <rect x="30" y="100" width="150px" height="100px" rx="3" ry="3" fill="teal" />
            <circle cx = "65" cy = "130" r="10" fill = "rgb(255,102,178)" stroke-width="1" stroke= "rgb(255,102,178)"/>
            <circle cx = "147" cy = "130" r="10" fill = "rgb(255,102,178)" stroke-width="1" stroke= "rgb(255,102,178)"/>
            <circle cx = "105" cy = "170" r="10" fill = "rgb(255,102,178)" stroke-width="1" stroke= "rgb(255,102,178)"/>
        </svg>    
            <svg class = "PolylineCircle">
                <polyline points="40 105, 63 55, 85 105, 128 105, 90 140, 120 180, 80 180, 63 220, 39 180, 5 180, 32 140, 01 105, 40 105 " fill="GRAY" stroke="#000"/>
                <circle cx = "20" cy = "80" r="10" fill = "rgb(255,102,178)" stroke-width="1" stroke= "rgb(255,102,178)"/>
                <circle cx = "100" cy = "80" r="10" fill = "rgb(255,102,178)" stroke-width="1" stroke= "rgb(255,102,178)"/>
                <circle cx = "10" cy = "140" r="10" fill = "rgb(255,102,178)" stroke-width="1" stroke= "rgb(255,102,178)"/>
                <circle cx = "110" cy = "140" r="10" fill = "rgb(255,102,178)" stroke-width="1" stroke= "rgb(255,102,178)"/>
                <circle cx = "30" cy = "200" r="10" fill = "rgb(255,102,178)" stroke-width="1" stroke= "rgb(255,102,178)"/>
                <circle cx = "90" cy = "200" r="10" fill = "rgb(255,102,178)" stroke-width="1" stroke= "rgb(255,102,178)"/>
            </svg>
            <svg class= "PolygonEllipse">
                <polygon points="95 80, 8 200, 190 200," fill="red" stroke="#000"/>
                <ellipse cx = "65" cy = "108" rx = "70" ry = "7" fill = "rgb(224,224,224)" stroke-width="1" stroke= "rgb(224,224,224)"/>
            </svg>
    
        <svg class="Circlelinerectangle">
            <rect  x = "2" y = "150" width = "195" height = "30" fill = "rgb(255,153,51)" stroke-width = "1" stroke = "rgb(255,153,51)"/>
            <line x1="150" y1="150" x2="150" y2="100" stroke="#000" stroke-width="5" />
            <line x1="50" y1="150" x2="50" y2="100" stroke="#000" stroke-width="5" />
            <circle cx = "150" cy = "80" r="30" fill = "rgb(255,102,178)" stroke-width="1" stroke= "rgb(255,102,178)"/>
            <circle cx = "50" cy = "80" r="30" fill = "rgb(255,102,178)" stroke-width="1" stroke= "rgb(255,102,178)"/>
            </svg>
                <svg class="PolylinePolygon">
                    <polygon points=" 60,20 100,40 100,80 60,100 20,80 20,40" style="fill:cyan;stroke:red;stroke-width:1" />
                    <polyline points="20 50,60 5" fill="none" stroke="red"/>
                    <polyline points="100 50,60 5" fill="none" stroke="red"/>
                    <polyline points="60 50,60 5" fill="none" stroke="red"/>
                </svg>
                <svg class="CircleRectanglePolylinePolygonEllipse">
                    <circle cx = "100" cy = "100" r="15" fill = "rgb(255,102,178)" stroke-width="1" stroke= "rgb(255,102,178)"/>
                    <rect  x = "2" y = "160" width = "120" height = "10" fill = "rgb(255,153,51)" stroke-width = "1" stroke = "rgb(255,153,51)"/>
                    <polyline points="0,3 40,40 40,80 80,80 80,120 120,120 120,160,120 100"style="fill:none;stroke:red;stroke-width:4" />
                    <polygon points="100,100 150,25 150,75 200,0" fill="black" stroke="black" />
                    <ellipse cx = "63" cy = "175" rx = "58" ry = "3" fill = "black" stroke-width="1" stroke= "rgb(224,224,224)"/>
        

                </svg>
</body>
</php>