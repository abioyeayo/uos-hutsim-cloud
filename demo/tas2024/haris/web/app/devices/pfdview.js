_.provide("App.Devices.PFDView");

App.Devices.PFDView = function(container, opt_options) {
	var options = opt_options || {};
	
	this.options = options;
	this.options['fontFamily'] = options['fontFamily'] || 'Tahoma,monospace,sans-serif';
	this.options['fontSize'] = options['fontSize'] || 8;
	this.options['fontColor'] = options['fontColor'] || 'white';
	this.options['backgroundColor1'] = options['backgroundColor1'] || 'black';
	this.options['backgroundColor2'] = options['backgroundColor2'] || 'rgb(60,60,60)';
	this.options['bugColor'] = options['bugColor'] || 'rgb(255,0,100)';
	this.options['highlightColor'] = options['highlightColor'] || 'rgb(255,255,255)';
	this.options['skyColor'] = options['skyColor'] || 'rgb(114,149,179)';
	this.options['groundColor'] = options['groundColor'] || 'rgb(165,105,63)';
	
	this.options['width'] = options['width'] || 300;
	this.options['height'] = options['height'] || 300; 

	this.speed = null;
	this.targetSpeed = null;
	this.altitude = null;
	this.targetAltitude = null;
	this.flightMode = null;
	this.visible = true;
	
	var containerElt = document.getElementById(container);
	this.stage = new Kinetic.Stage({
		'container': containerElt,
		'width': containerElt.offsetWidth,
		'height': containerElt.offsetHeight
	});
	this.layer = new Kinetic.Layer();
	this.stage.add(this.layer);
	this.stage.setScale(containerElt.offsetWidth / 200.0,
			containerElt.offsetWidth / 200.0);
	
	// Artificial horizon.
	this.attitudeIndicator = new App.Devices.PFDView.ArtificialHorizon({
		'x': 35,
		'y': 20,
		'width': 130,
		'height': 130,
		'groundColor': this.options['groundColor'],
		'skyColor': this.options['skyColor'],
		'lineColor': 'white',
		'planeColor': 'black'
	});
	this.layer.add(this.attitudeIndicator);
	
	// Speed tape.
	this.speedTape = new App.Devices.PFDView.Tape({
		'x': 0,
		'y': 15,
		'fill': this.options['backgroundColor2'],
		'fontColor': this.options['fontColor'],
		'fontFamily': this.options['fontFamily'],
		'fontSize': this.options['fontSize'],
		'instantaneousBackgroundColor': this.options['backgroundColor1'],
		'bugColor': this.options['bugColor'],
		'side': App.Devices.PFDView.Tape.SideType.LEFT
	});
	this.layer.add(this.speedTape);

	// Altitude tape.
	this.altitudeTape = new App.Devices.PFDView.Tape({
		'x': 170,
		'y': 15,
		'fill': this.options['backgroundColor2'],
		'fontColor': this.options['fontColor'],
		'fontFamily': this.options['fontFamily'],
		'fontSize': this.options['fontSize'],
		'instantaneousBackgroundColor': this.options['backgroundColor1'],
		'bugColor': this.options['bugColor'],
		'side': App.Devices.PFDView.Tape.SideType.RIGHT
	});
	this.layer.add(this.altitudeTape);
	
	// Target altitude text.
	var smallFontSize = this.options['fontSize'] * 0.9;
	this.targetAltitudeDisplay = new Kinetic.Text({
		'x': 170,
		'y': 5,
		'width': 30,
		'align': 'center',
		'fontSize': smallFontSize,
		'fontFamily': this.options['fontFamily'],
		'textFill': this.options['bugColor']});
	this.layer.add(this.targetAltitudeDisplay);

	// Target speed text.
	this.targetSpeedDisplay = new Kinetic.Text({
		'x': 0,
		'y': 5,
		'width': 30,
		'align': 'center',
		'fontSize': smallFontSize,
		'fontFamily': this.options['fontFamily'],
		'textFill': this.options['bugColor']});
	this.layer.add(this.targetSpeedDisplay);
	
	this.setSize(
			this.options['width'], 
			this.options['height']);
	this.update({
		speed: 0.0,
		targetSpeed: 0.0,
		altitude: 0.0,
		targetAltitude: 0.0,
		attitude: {
			pitch: 0.0,
			roll: 0.0
		}
	});
};

App.Devices.PFDView.prototype.update = function(options) {
	options = options || {};
	if (options.speed) {
		this.setSpeed(options.speed);
	}
	if (options.targetSpeed) {
		this.setTargetSpeed(options.targetSpeed);
	}
	if (options.altitude) {
		this.setAltitude(options.altitude);
	}
	if (options.targetAltitude) {
		this.setTargetAltitude(options.targetAltitude);
	}
	if (options.attitude) {
		this.setAttitude(options.attitude.pitch, options.attitude.roll);
	}
	this.draw();
};

App.Devices.PFDView.prototype.setSize = function(width, height) {
	var aspect = width / height;
	var w, h = 0;
	if (aspect > (4 / 3)) {
		w = 4 / 3 * height; h = height;
	} else {
		w = width; h = 3 / 4 * width;
	}
	this.stage.setSize(w, h);
	this.stage.setScale(w / 200, w / 200);
};

App.Devices.PFDView.prototype.setSpeed = function(speed) {
	this.speedTape.setValue(speed);
};

App.Devices.PFDView.prototype.setTargetSpeed = function(speed) {
	this.targetSpeed = speed;
	if (speed === null) {
		this.speedTape.setTargetValue(null);
		this.targetSpeedDisplay.hide();
	} else {
		this.speedTape.setTargetValue(speed);
		this.targetSpeedDisplay.setText(Math.round(speed).toString());
		this.targetSpeedDisplay.show();
	}
};

App.Devices.PFDView.prototype.draw = function() {
	if (this.visible) {
		this.layer.draw();
	}
};

App.Devices.PFDView.prototype.setVisible = function(isVisible) {
	this.visible = isVisible;
};

App.Devices.PFDView.prototype.setAltitude = function(altitude) {
	this.altitudeTape.setValue(altitude);
};

App.Devices.PFDView.prototype.setTargetAltitude = function(altitude) {
	this.targetAltitude = altitude;
	if (altitude === null) {
		this.altitudeTape.setTargetValue(null);
		this.targetAltitudeDisplay.hide();
	} else {
		this.altitudeTape.setTargetValue(altitude);
		this.targetAltitudeDisplay.setText(Math.round(altitude).toString());
		this.targetAltitudeDisplay.show();
	}
};

App.Devices.PFDView.setHeading = function(heading) {
};

App.Devices.PFDView.prototype.setAttitude = function(pitch, roll) {
	this.attitudeIndicator.setPitchRoll(pitch, roll);
};

// ArtificialHorizon
App.Devices.PFDView.ArtificialHorizon = function(config) {
	this.setDefaultAttrs({
		'width': 100,
		'height': 100,
		'skyColor': '#72cde4',
		'groundColor': '#323232',
		'lineColor': '#ffffff',
		'planeColor': 'black'
	});
	this.shapeType = 'ArtificialHorizon';
	this.radius = Math.min(config['width'], config['height']) / 2.0;
	this.pitch = 0;
	this.roll = 0;
	Kinetic.Shape.call(this, config);
	this._setDrawFuncs();
};
_.inherits(App.Devices.PFDView.ArtificialHorizon, Kinetic.Shape);

App.Devices.PFDView.ArtificialHorizon.prototype.drawFunc = function(context) {
	var horizon = this.getHorizon_(this.pitch);
	var attrs = this.getAttrs();
	var width = attrs['width'];
	var height = attrs['height'];

	context.translate(width / 2, height / 2);
	context.save();

	// Clip everything to a box that is width x height. We draw the
	// ground and sky as rects that extend beyond those dimensons so
	// that there are no gaps when they're rotated.
	context.beginPath();
	context.rect(-width / 2, -height / 2, width, height);
	context.clip();

	context.rotate(-this.roll);
	
	context.globalAlpha = 0.7;
	
	// Draw the ground.
	context.fillStyle = attrs['groundColor'];
	context.strokeStyle = attrs['lineColor'];
	context.lineWidth = 3;
	context.beginPath();
	context.rect(-width, horizon, width * 2, height);
	context.fill();

	// Draw the sky.
	context.fillStyle = attrs['skyColor'];
	context.beginPath();
	context.rect(-width, -height, width * 2, height + horizon);
	context.fill();
	
	context.globalAlpha = 1.0;

	// Draw the horizon line.
	context.lineWidth = 1;
	context.beginPath();
	context.moveTo(-width / 2, horizon);
	context.lineTo(width / 2, horizon);
	context.stroke();

	// Draw the pitch ladder.
	this.drawPitchRung_(context, 30, width * 0.3);
	this.drawPitchRung_(context, 25, width * 0.05);
	this.drawPitchRung_(context, 20, width * 0.2);
	this.drawPitchRung_(context, 15, width * 0.05);
	this.drawPitchRung_(context, 10, width * 0.1);
	this.drawPitchRung_(context, 5, width * 0.05);

	// Draw the roll indicator.
	var rollRadius = this.radius * 0.9;
	context.beginPath();
	context.arc(0, 0, rollRadius,
			210 * Math.PI / 180.0, 330 * Math.PI / 180.0,
			false);
	context.stroke();
	this.drawRollRung_(context, 210 * Math.PI / 180, 10, rollRadius);
	this.drawRollRung_(context, 220 * Math.PI / 180, 5, rollRadius);
	this.drawRollRung_(context, 230 * Math.PI / 180, 10, rollRadius);
	this.drawRollRung_(context, 240 * Math.PI / 180, 5, rollRadius);
	this.drawRollRung_(context, 250 * Math.PI / 180, 5, rollRadius);
	this.drawRollRung_(context, 260 * Math.PI / 180, 5, rollRadius);
	//this.drawRollRung_(270 * Math.PI / 180, 5, rollRadius);
	this.drawTriangle_(context, 270 * Math.PI / 180, 5, rollRadius, true);
	this.drawRollRung_(context, 280 * Math.PI / 180, 5, rollRadius);
	this.drawRollRung_(context, 290 * Math.PI / 180, 5, rollRadius);
	this.drawRollRung_(context, 300 * Math.PI / 180, 5, rollRadius);
	this.drawRollRung_(context, 310 * Math.PI / 180, 10, rollRadius);
	this.drawRollRung_(context, 320 * Math.PI / 180, 5, rollRadius);
	this.drawRollRung_(context, 330 * Math.PI / 180, 10, rollRadius);

	// Undo the roll rotation so we can draw the plane figure over the
	// rotated elements.
	context.restore();

	this.drawTriangle_(context, 270 * Math.PI / 180, -5, rollRadius, false);

	// Draw the plane.
	context.strokeStyle = attrs['planeColor'];
	context.lineWidth = 3;
	context.beginPath();
	context.moveTo(-30, -1);
	context.lineTo(-10, -1);
	context.lineTo(-5, 5);
	context.stroke();
	context.beginPath();
	context.moveTo(30, -1);
	context.lineTo(10, -1);
	context.lineTo(5, 5);
	context.stroke();
};

App.Devices.PFDView.ArtificialHorizon.prototype.drawTriangle_ = function(
		context, theta, length, radius, filled) {
	var cos = Math.cos(theta);
	var sin = Math.sin(theta);
	var phi = 2 * Math.PI / 180;
	var attrs = this.getAttrs();
	context.lineWidth = 1;
	context.strokeStyle = attrs['lineColor'];
	context.beginPath();
	context.moveTo(radius * Math.cos(theta),
			radius * Math.sin(theta));
	context.lineTo((radius + length) * Math.cos(theta + phi),
			(radius + length) * Math.sin(theta + phi));
	context.lineTo((radius + length) * Math.cos(theta - phi),
			(radius + length) * Math.sin(theta - phi));
	context.lineTo(radius * Math.cos(theta),
			radius * Math.sin(theta));
	context.stroke();
	if (filled) {
		context.fillStyle = attrs['lineColor'];
		context.fill();
	}
};

App.Devices.PFDView.ArtificialHorizon.prototype.drawRollRung_ = function(
		context, theta, length, radius) {
	var cos = Math.cos(theta);
	var sin = Math.sin(theta);
	var attrs = this.getAttrs();
	context.lineWidth = 1;
	context.strokeStyle = attrs['lineColor'];
	context.beginPath();
	context.moveTo(cos * radius, sin * radius);
	context.lineTo(cos * (radius + length), sin * (radius + length));
	context.stroke();
};

App.Devices.PFDView.ArtificialHorizon.prototype.drawPitchRung_ = function(
		context, pitchAngle, length) {
	var attrs = this.getAttrs();
	var height = attrs['height'];
	var width = attrs['width'];

	context.lineWidth = 1;
	context.strokeStyle = attrs['lineColor'];
	var horizon = this.getHorizon_(this.pitch + pitchAngle * Math.PI / 180);
	context.beginPath();
	context.moveTo(-length / 2, horizon);
	context.lineTo(length / 2, horizon);
	context.stroke();

	horizon = this.getHorizon_(this.pitch - pitchAngle * Math.PI / 180);
	context.beginPath();
	context.moveTo(-length / 2, horizon);
	context.lineTo(length / 2, horizon);
	context.stroke();
};

App.Devices.PFDView.ArtificialHorizon.prototype.getHorizon_ = function(pitch) {
	return Math.sin(pitch) * this.radius;
};

App.Devices.PFDView.ArtificialHorizon.prototype.setPitchRoll = function(pitch, roll) {
	this.pitch = pitch;
	this.roll = roll;
};

// Tape
App.Devices.PFDView.Tape = function(config) {
	var WIDTH = App.Devices.PFDView.Tape.WIDTH;
	var HEIGHT = App.Devices.PFDView.Tape.HEIGHT;
	this.setDefaultAttrs({
		'backgroundColor': undefined,
		'width': WIDTH,
		'height': HEIGHT,
		'fontFamily': 'Calibri',
		'fontSize': 12,
		'fontStyle': 'normal',
		'side': App.Devices.PFDView.Tape.SideType.LEFT
	});
	this.value = 0;
	this.targetValue = null;
	this.valueText = '0';

	Kinetic.Shape.call(this, config);
	this._setDrawFuncs();

	// Because I'm lazy, we do this hacky trick of creating some Kinetic
	// objects then calling their drawFuncs in our drawFunc.
	this.instantaneousPolygon = new Kinetic.Polygon({
		'points': this.reflect_(
				[0, HEIGHT * 60 / 140,
				 WIDTH * 25 / 30, HEIGHT * 60 / 140,
				 WIDTH, HEIGHT / 2,
				 WIDTH * 25 / 30, HEIGHT * 80 / 140,
				 0, HEIGHT * 80 / 140,
				 0, HEIGHT * 60 / 140]),
				 'stroke': config['fontColor'],
				 'strokeWidth': 1.0,
				 'fill': config['instantaneousBackgroundColor']
	});

	this.bug = new Kinetic.Polygon({
		'x': 0,
		'y': 0,
		'points': this.reflect_(
				[WIDTH * 31 / 30, 0,
				 WIDTH * 34 / 30, HEIGHT * -2 / 140,
				 WIDTH * 36 / 30, HEIGHT * -2 / 140,
				 WIDTH * 36 / 30, HEIGHT * 2 / 140,
				 WIDTH * 34 / 30, HEIGHT * 2 / 140,
				 WIDTH * 31 / 30, 0]),
				 'stroke': config['bugColor'],
				 'fill': config['bugColor'],
				 'strokeWidth': 1.0
	});
};
_.inherits(App.Devices.PFDView.Tape, Kinetic.Shape);

App.Devices.PFDView.Tape.WIDTH = 30;
App.Devices.PFDView.Tape.HEIGHT = 140;
App.Devices.PFDView.Tape.SideType = {
		LEFT: 'left',
		RIGHT: 'right'
};

App.Devices.PFDView.Tape.prototype.reflect1_ = function(x_coord) {
	var attrs = this.getAttrs();
	if (attrs['side'] === App.Devices.PFDView.Tape.SideType.RIGHT) {
		var width = attrs['width'];
		return width - x_coord;
	} else {
		return x_coord;
	}
};

App.Devices.PFDView.Tape.prototype.reflect_ = function(points) {
	var attrs = this.getAttrs();
	if (attrs['side'] === App.Devices.PFDView.Tape.SideType.RIGHT) {
		var width = attrs['width'];
		var len = points.length;
		for (var i = 0; i < len; i += 2) {
			points[i] = width - points[i];
		}
	}
	return points;
};

App.Devices.PFDView.Tape.prototype.setValue = function(value) {
	if (value != this.value) {
		this.value = value;
		var valueText = 'ERR';
		if (value) {
			valueText = value.toString();
		}
		if (valueText.length > 3) {
			valueText = valueText.substring(0, 3);
			if (valueText.charAt(valueText.length - 1) == '.') {
				valueText = valueText.substr(0, valueText.length - 1);
			}
		}
		this.valueText = valueText;
	}
};

App.Devices.PFDView.Tape.prototype.setTargetValue = function(target) {
	this.targetValue = target;
};

App.Devices.PFDView.Tape.prototype.drawFunc = function(context) {
	// The tape displays 3 pieces of info:
	// * current value
	// * moving value ladder
	// * target value, if set
	var WIDTH = App.Devices.PFDView.Tape.WIDTH;
	var HEIGHT = App.Devices.PFDView.Tape.HEIGHT;
	var attrs = this.getAttrs();

	// background
	if (attrs['backgroundColor']) {
		context.beginPath();
		context.fillStyle = attrs['backgroundColor'];
		context.rect(0, 0, 30, 140);
		context.closePath();
		this.fillStroke(context);
	}

	// Draw the value tics.
	var minorTicInterval = 2;
	var majorTicInterval = 10;
	var valueScale = 2;
	// Find minimum multiple-of-minorTicInterval value that will be
	// displayed.
	var minValue = this.value - HEIGHT / 4;
	minValue = Math.ceil(minValue / minorTicInterval) * minorTicInterval;
	minValue = Math.max(0, minValue);
	var maxValue = this.value + HEIGHT / 4;
	maxValue = Math.floor(maxValue / minorTicInterval) * minorTicInterval;
	var font = ('normal ' +
			attrs['fontSize'] * 0.9 + 'pt ' +
			attrs['fontFamily']);
	context.font = font;
	context.fillStyle = attrs['fontColor'];
	context.strokeStyle = attrs['fontColor'];
	context.textBaseLine = 'top';
	if (attrs['side'] === App.Devices.PFDView.Tape.SideType.LEFT) {
		context.textAlign = 'right';
	} else {
		context.textAlign = 'left';
	}

	var lineHeightAdjust = attrs['fontSize'] / 2;
	for (var v = minValue; v <= maxValue; v += minorTicInterval) {
		var isMajorTic = (v % majorTicInterval < 0.001 ||
				majorTicInterval - (v % majorTicInterval) < 0.001);
		var y = HEIGHT / 2 + valueScale * (this.value - v);
		if (isMajorTic) {
			context.beginPath();
			context.moveTo(this.reflect1_(WIDTH * 25 / 30), y);
			context.lineTo(this.reflect1_(WIDTH), y);
			context.stroke();

			var label = '' + Math.round(v);
			context.beginPath();
			context.fillText(
					label,
					this.reflect1_(WIDTH * 23 / 30),
					y + lineHeightAdjust);
		} else {
			context.beginPath();
			context.moveTo(this.reflect1_(WIDTH * 28 / 30), y);
			context.lineTo(this.reflect1_(WIDTH), y);
			context.stroke();
		}
	}

	// Instantaneous value text surrounded by polygon.
	this.instantaneousPolygon.drawFunc(context);
	var textY = attrs['height'] / 2;
	font = ('normal ' +
			attrs['fontSize'] + 'pt ' +
			attrs['fontFamily']);
	context.font = font;
	context.textBaseline = 'middle';
	context.beginPath();
	context.fillText(
			this.valueText,
			this.reflect1_(WIDTH * 25 / 30),
			textY);

	if (this.targetValue) {
		var bugX = this.reflect1_(0);
		var bugY = 70;
		bugY -= this.targetValue * valueScale;
		bugY += this.value * valueScale;
		bugY = Math.min(162, Math.max(16, bugY));
		context.translate(0, bugY);
		this.bug.drawFunc(context);
		context.translate(0, -bugY);
	}
};

App.Views.PFD = App.Views.PFDView;