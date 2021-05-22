<?php
/**
 * Date formats.
 *
 * Main date formating options.
 */

// year:
// Y - four digit representation of a year (2201)
// y - two digit representation of a year (21)

// month
// F - full textual representation of a month (January through December)
// n - numeric representation of a month, without leading zeros (1 to 12)
// m - numeric representation of a month (from 01 to 12)
// M - short textual representation of a month (three letters)

// day
// d - day of the month (from 01 to 31)
// j - day of the month without leading zeros (1 to 31)
// l - full textual representation of a day
// S - ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)
// w - numeric representation of the day (0 for Sunday, 6 for Saturday)
// z - day of the year (from 0 through 365)
// t - number of days in given month

// hour
// g - 12-hour format of an hour (1 to 12)
// G - 24-hour format of an hour (0 to 23)
// h - 12-hour format of an hour (01 to 12)
// H - 24-hour format of an hour (00 to 23)

// minutes, seconds
// i - minutes, with leading zeros (00 to 59)
// s - seconds, with leading zeros (00 to 59)

// examples
date('Y-m-d H:i:s'); // 2021-03-23 17:44:28
date('YmdHis'); // 20210323174428
