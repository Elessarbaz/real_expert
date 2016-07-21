/**
 * Created by darmen on 7/21/16.
 */
var easingFn = function (t, b, c, d) {
  var ts = (t /= d) * t;
  var tc = ts * t;
  return b + c * (tc + -3 * ts + 3 * t);
};
var options = {
  useEasing : true,
  easingFn: easingFn,
  useGrouping : true,
  separator : ',',
  decimal : '.',
  prefix : '',
  suffix : ''
};
var count95 = new CountUp("count95Element", 0, 95, 0, 3.5, options);
var count1 = new CountUp("count1Element", 50, 1, 0, 2.5, options);
var count10 = new CountUp("count10Element", 0, 10, 0, 2, options);
var count30 = new CountUp("count30Element", 0, 30, 0, 2.5, options);


var waypoint = new Waypoint({
  element: document.getElementById('advantages'),
  handler: function(direction) {
    count95.start();
    count1.start();
    count10.start();
    count30.start();
  },
  offset: '200px'
});