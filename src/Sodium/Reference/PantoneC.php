<?php

namespace Sodium\Reference;

class PantoneC extends ReferenceAbstract
{
    public function get()
    {
        $pantone_pallete = array(
            "Proc. y C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 0
            ),
            "Proc. Magen. C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 0
            ),
            "Proc. c C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 0
            ),
            "Proc. b C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 100
            ),
            "100 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 51,
                'key' => 0
            ),
            "101 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 79,
                'key' => 0
            ),
            "102 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 95,
                'key' => 0
            ),
            "y C" => array(
                'cyan' => 0,
                'magenta' => 1,
                'yellow' => 100,
                'key' => 0
            ),
            "103 C" => array(
                'cyan' => 0,
                'magenta' => 3,
                'yellow' => 100,
                'key' => 18
            ),
            "104 C" => array(
                'cyan' => 0,
                'magenta' => 3,
                'yellow' => 100,
                'key' => 30
            ),
            "105 C" => array(
                'cyan' => 0,
                'magenta' => 3,
                'yellow' => 100,
                'key' => 50
            ),
            "106 C" => array(
                'cyan' => 0,
                'magenta' => 2,
                'yellow' => 69,
                'key' => 0
            ),
            "107 C" => array(
                'cyan' => 0,
                'magenta' => 4,
                'yellow' => 79,
                'key' => 0
            ),
            "108 C" => array(
                'cyan' => 0,
                'magenta' => 6,
                'yellow' => 95,
                'key' => 0
            ),
            "109 C" => array(
                'cyan' => 0,
                'magenta' => 10,
                'yellow' => 100,
                'key' => 0
            ),
            "110 C" => array(
                'cyan' => 0,
                'magenta' => 12,
                'yellow' => 100,
                'key' => 7
            ),
            "111 C" => array(
                'cyan' => 0,
                'magenta' => 11,
                'yellow' => 100,
                'key' => 27
            ),
            "112 C" => array(
                'cyan' => 0,
                'magenta' => 10,
                'yellow' => 100,
                'key' => 38
            ),
            "113 C" => array(
                'cyan' => 0,
                'magenta' => 7,
                'yellow' => 66,
                'key' => 0
            ),
            "114 C" => array(
                'cyan' => 0,
                'magenta' => 8,
                'yellow' => 73,
                'key' => 0
            ),
            "115 C" => array(
                'cyan' => 0,
                'magenta' => 9,
                'yellow' => 80,
                'key' => 0
            ),
            "116 C" => array(
                'cyan' => 0,
                'magenta' => 16,
                'yellow' => 100,
                'key' => 0
            ),
            "117 C" => array(
                'cyan' => 0,
                'magenta' => 18,
                'yellow' => 100,
                'key' => 15
            ),
            "118 C" => array(
                'cyan' => 0,
                'magenta' => 18,
                'yellow' => 100,
                'key' => 27
            ),
            "119 C" => array(
                'cyan' => 0,
                'magenta' => 12,
                'yellow' => 100,
                'key' => 49
            ),
            "120 C" => array(
                'cyan' => 0,
                'magenta' => 9,
                'yellow' => 58,
                'key' => 0
            ),
            "121 C" => array(
                'cyan' => 0,
                'magenta' => 11,
                'yellow' => 69,
                'key' => 0
            ),
            "122 C" => array(
                'cyan' => 0,
                'magenta' => 17,
                'yellow' => 80,
                'key' => 0
            ),
            "123 C" => array(
                'cyan' => 0,
                'magenta' => 24,
                'yellow' => 94,
                'key' => 0
            ),
            "124 C" => array(
                'cyan' => 0,
                'magenta' => 28,
                'yellow' => 100,
                'key' => 6
            ),
            "125 C" => array(
                'cyan' => 0,
                'magenta' => 26,
                'yellow' => 100,
                'key' => 26
            ),
            "126 C" => array(
                'cyan' => 0,
                'magenta' => 25,
                'yellow' => 100,
                'key' => 37
            ),
            "1205 C" => array(
                'cyan' => 0,
                'magenta' => 5,
                'yellow' => 31,
                'key' => 0
            ),
            "1215 C" => array(
                'cyan' => 0,
                'magenta' => 9,
                'yellow' => 45,
                'key' => 0
            ),
            "1225 C" => array(
                'cyan' => 0,
                'magenta' => 17,
                'yellow' => 62,
                'key' => 0
            ),
            "1235 C" => array(
                'cyan' => 0,
                'magenta' => 29,
                'yellow' => 91,
                'key' => 0
            ),
            "1245 C" => array(
                'cyan' => 0,
                'magenta' => 28,
                'yellow' => 100,
                'key' => 18
            ),
            "1255 C" => array(
                'cyan' => 0,
                'magenta' => 27,
                'yellow' => 100,
                'key' => 34
            ),
            "1265 C" => array(
                'cyan' => 0,
                'magenta' => 27,
                'yellow' => 100,
                'key' => 51
            ),
            "127 C" => array(
                'cyan' => 0,
                'magenta' => 7,
                'yellow' => 50,
                'key' => 0
            ),
            "128 C" => array(
                'cyan' => 0,
                'magenta' => 11,
                'yellow' => 65,
                'key' => 0
            ),
            "129 C" => array(
                'cyan' => 0,
                'magenta' => 16,
                'yellow' => 77,
                'key' => 0
            ),
            "130 C" => array(
                'cyan' => 0,
                'magenta' => 30,
                'yellow' => 100,
                'key' => 0
            ),
            "131 C" => array(
                'cyan' => 0,
                'magenta' => 32,
                'yellow' => 100,
                'key' => 9
            ),
            "132 C" => array(
                'cyan' => 0,
                'magenta' => 28,
                'yellow' => 100,
                'key' => 30
            ),
            "133 C" => array(
                'cyan' => 0,
                'magenta' => 20,
                'yellow' => 100,
                'key' => 56
            ),
            "134 C" => array(
                'cyan' => 0,
                'magenta' => 11,
                'yellow' => 45,
                'key' => 0
            ),
            "135 C" => array(
                'cyan' => 0,
                'magenta' => 19,
                'yellow' => 60,
                'key' => 0
            ),
            "136 C" => array(
                'cyan' => 0,
                'magenta' => 27,
                'yellow' => 76,
                'key' => 0
            ),
            "137 C" => array(
                'cyan' => 0,
                'magenta' => 35,
                'yellow' => 90,
                'key' => 0
            ),
            "138 C" => array(
                'cyan' => 0,
                'magenta' => 42,
                'yellow' => 100,
                'key' => 1
            ),
            "139 C" => array(
                'cyan' => 0,
                'magenta' => 37,
                'yellow' => 100,
                'key' => 23
            ),
            "140 C" => array(
                'cyan' => 0,
                'magenta' => 27,
                'yellow' => 100,
                'key' => 54
            ),
            "1345 C" => array(
                'cyan' => 0,
                'magenta' => 14,
                'yellow' => 47,
                'key' => 0
            ),
            "1355 C" => array(
                'cyan' => 0,
                'magenta' => 20,
                'yellow' => 56,
                'key' => 0
            ),
            "1365 C" => array(
                'cyan' => 0,
                'magenta' => 29,
                'yellow' => 72,
                'key' => 0
            ),
            "1375 C" => array(
                'cyan' => 0,
                'magenta' => 40,
                'yellow' => 90,
                'key' => 0
            ),
            "1385 C" => array(
                'cyan' => 0,
                'magenta' => 44,
                'yellow' => 100,
                'key' => 7
            ),
            "1395 C" => array(
                'cyan' => 0,
                'magenta' => 41,
                'yellow' => 100,
                'key' => 37
            ),
            "1405 C" => array(
                'cyan' => 0,
                'magenta' => 36,
                'yellow' => 100,
                'key' => 63
            ),
            "141 C" => array(
                'cyan' => 0,
                'magenta' => 19,
                'yellow' => 51,
                'key' => 0
            ),
            "142 C" => array(
                'cyan' => 0,
                'magenta' => 28,
                'yellow' => 76,
                'key' => 0
            ),
            "143 C" => array(
                'cyan' => 0,
                'magenta' => 35,
                'yellow' => 85,
                'key' => 0
            ),
            "144 C" => array(
                'cyan' => 0,
                'magenta' => 48,
                'yellow' => 100,
                'key' => 0
            ),
            "145 C" => array(
                'cyan' => 0,
                'magenta' => 47,
                'yellow' => 100,
                'key' => 8
            ),
            "146 C" => array(
                'cyan' => 0,
                'magenta' => 43,
                'yellow' => 100,
                'key' => 33
            ),
            "147 C" => array(
                'cyan' => 0,
                'magenta' => 28,
                'yellow' => 100,
                'key' => 56
            ),
            "148 C" => array(
                'cyan' => 0,
                'magenta' => 16,
                'yellow' => 37,
                'key' => 0
            ),
            "149 C" => array(
                'cyan' => 0,
                'magenta' => 23,
                'yellow' => 47,
                'key' => 0
            ),
            "150 C" => array(
                'cyan' => 0,
                'magenta' => 35,
                'yellow' => 70,
                'key' => 0
            ),
            "151 C" => array(
                'cyan' => 0,
                'magenta' => 48,
                'yellow' => 95,
                'key' => 0
            ),
            "152 C" => array(
                'cyan' => 0,
                'magenta' => 51,
                'yellow' => 100,
                'key' => 1
            ),
            "153 C" => array(
                'cyan' => 0,
                'magenta' => 46,
                'yellow' => 100,
                'key' => 18
            ),
            "154 C" => array(
                'cyan' => 0,
                'magenta' => 46,
                'yellow' => 100,
                'key' => 34
            ),
            "1485 C" => array(
                'cyan' => 0,
                'magenta' => 27,
                'yellow' => 54,
                'key' => 0
            ),
            "1495 C" => array(
                'cyan' => 0,
                'magenta' => 33,
                'yellow' => 67,
                'key' => 0
            ),
            "1505 C" => array(
                'cyan' => 0,
                'magenta' => 42,
                'yellow' => 77,
                'key' => 0
            ),
            "Orange 021 C" => array(
                'cyan' => 0,
                'magenta' => 53,
                'yellow' => 100,
                'key' => 0
            ),
            "1525 C" => array(
                'cyan' => 0,
                'magenta' => 58,
                'yellow' => 100,
                'key' => 10
            ),
            "1535 C" => array(
                'cyan' => 0,
                'magenta' => 53,
                'yellow' => 100,
                'key' => 38
            ),
            "1545 C" => array(
                'cyan' => 0,
                'magenta' => 53,
                'yellow' => 100,
                'key' => 72
            ),
            "155 C" => array(
                'cyan' => 0,
                'magenta' => 12,
                'yellow' => 28,
                'key' => 0
            ),
            "156 C" => array(
                'cyan' => 0,
                'magenta' => 22,
                'yellow' => 42,
                'key' => 0
            ),
            "157 C" => array(
                'cyan' => 0,
                'magenta' => 43,
                'yellow' => 70,
                'key' => 0
            ),
            "158 C" => array(
                'cyan' => 0,
                'magenta' => 61,
                'yellow' => 97,
                'key' => 0
            ),
            "159 C" => array(
                'cyan' => 0,
                'magenta' => 66,
                'yellow' => 100,
                'key' => 7
            ),
            "160 C" => array(
                'cyan' => 0,
                'magenta' => 62,
                'yellow' => 100,
                'key' => 32
            ),
            "161 C" => array(
                'cyan' => 0,
                'magenta' => 52,
                'yellow' => 100,
                'key' => 64
            ),
            "1555 C" => array(
                'cyan' => 0,
                'magenta' => 22,
                'yellow' => 34,
                'key' => 0
            ),
            "1565 C" => array(
                'cyan' => 0,
                'magenta' => 34,
                'yellow' => 49,
                'key' => 0
            ),
            "1575 C" => array(
                'cyan' => 0,
                'magenta' => 45,
                'yellow' => 72,
                'key' => 0
            ),
            "1585 C" => array(
                'cyan' => 0,
                'magenta' => 56,
                'yellow' => 90,
                'key' => 0
            ),
            "1595 C" => array(
                'cyan' => 0,
                'magenta' => 59,
                'yellow' => 100,
                'key' => 5
            ),
            "1605 C" => array(
                'cyan' => 0,
                'magenta' => 56,
                'yellow' => 100,
                'key' => 30
            ),
            "1615 C" => array(
                'cyan' => 0,
                'magenta' => 56,
                'yellow' => 100,
                'key' => 43
            ),
            "162 C" => array(
                'cyan' => 0,
                'magenta' => 15,
                'yellow' => 22,
                'key' => 0
            ),
            "163 C" => array(
                'cyan' => 0,
                'magenta' => 31,
                'yellow' => 44,
                'key' => 0
            ),
            "164 C" => array(
                'cyan' => 0,
                'magenta' => 46,
                'yellow' => 73,
                'key' => 0
            ),
            "165 C" => array(
                'cyan' => 0,
                'magenta' => 59,
                'yellow' => 96,
                'key' => 0
            ),
            "166 C" => array(
                'cyan' => 0,
                'magenta' => 64,
                'yellow' => 100,
                'key' => 0
            ),
            "167 C" => array(
                'cyan' => 0,
                'magenta' => 60,
                'yellow' => 100,
                'key' => 17
            ),
            "168 C" => array(
                'cyan' => 0,
                'magenta' => 57,
                'yellow' => 100,
                'key' => 59
            ),
            "1625 C" => array(
                'cyan' => 0,
                'magenta' => 31,
                'yellow' => 37,
                'key' => 0
            ),
            "1635 C" => array(
                'cyan' => 0,
                'magenta' => 39,
                'yellow' => 48,
                'key' => 0
            ),
            "1645 C" => array(
                'cyan' => 0,
                'magenta' => 49,
                'yellow' => 66,
                'key' => 0
            ),
            "1655 C" => array(
                'cyan' => 0,
                'magenta' => 63,
                'yellow' => 91,
                'key' => 0
            ),
            "1665 C" => array(
                'cyan' => 0,
                'magenta' => 68,
                'yellow' => 100,
                'key' => 0
            ),
            "1675 C" => array(
                'cyan' => 0,
                'magenta' => 67,
                'yellow' => 100,
                'key' => 28
            ),
            "1685 C" => array(
                'cyan' => 0,
                'magenta' => 68,
                'yellow' => 100,
                'key' => 44
            ),
            "169 C" => array(
                'cyan' => 0,
                'magenta' => 20,
                'yellow' => 20,
                'key' => 0
            ),
            "170 C" => array(
                'cyan' => 0,
                'magenta' => 40,
                'yellow' => 44,
                'key' => 0
            ),
            "171 C" => array(
                'cyan' => 0,
                'magenta' => 53,
                'yellow' => 68,
                'key' => 0
            ),
            "172 C" => array(
                'cyan' => 0,
                'magenta' => 66,
                'yellow' => 88,
                'key' => 0
            ),
            "173 C" => array(
                'cyan' => 0,
                'magenta' => 69,
                'yellow' => 100,
                'key' => 4
            ),
            "174 C" => array(
                'cyan' => 0,
                'magenta' => 70,
                'yellow' => 100,
                'key' => 36
            ),
            "175 C" => array(
                'cyan' => 0,
                'magenta' => 65,
                'yellow' => 100,
                'key' => 60
            ),
            "176 C" => array(
                'cyan' => 0,
                'magenta' => 25,
                'yellow' => 18,
                'key' => 0
            ),
            "177 C" => array(
                'cyan' => 0,
                'magenta' => 45,
                'yellow' => 40,
                'key' => 0
            ),
            "178 C" => array(
                'cyan' => 0,
                'magenta' => 59,
                'yellow' => 56,
                'key' => 0
            ),
            "Warm Red C" => array(
                'cyan' => 0,
                'magenta' => 75,
                'yellow' => 90,
                'key' => 0
            ),
            "179 C" => array(
                'cyan' => 0,
                'magenta' => 79,
                'yellow' => 100,
                'key' => 0
            ),
            "180 C" => array(
                'cyan' => 0,
                'magenta' => 79,
                'yellow' => 100,
                'key' => 11
            ),
            "181 C" => array(
                'cyan' => 0,
                'magenta' => 74,
                'yellow' => 100,
                'key' => 47
            ),
            "1765 C" => array(
                'cyan' => 0,
                'magenta' => 38,
                'yellow' => 21,
                'key' => 0
            ),
            "1775 C" => array(
                'cyan' => 0,
                'magenta' => 47,
                'yellow' => 29,
                'key' => 0
            ),
            "1785 C" => array(
                'cyan' => 0,
                'magenta' => 67,
                'yellow' => 50,
                'key' => 0
            ),
            "1788 C" => array(
                'cyan' => 0,
                'magenta' => 84,
                'yellow' => 88,
                'key' => 0
            ),
            "1795 C" => array(
                'cyan' => 0,
                'magenta' => 94,
                'yellow' => 100,
                'key' => 0
            ),
            "1805 C" => array(
                'cyan' => 0,
                'magenta' => 91,
                'yellow' => 100,
                'key' => 23
            ),
            "1815 C" => array(
                'cyan' => 0,
                'magenta' => 90,
                'yellow' => 100,
                'key' => 51
            ),
            "1767 C" => array(
                'cyan' => 0,
                'magenta' => 27,
                'yellow' => 12,
                'key' => 0
            ),
            "1777 C" => array(
                'cyan' => 0,
                'magenta' => 58,
                'yellow' => 36,
                'key' => 0
            ),
            "1787 C" => array(
                'cyan' => 0,
                'magenta' => 76,
                'yellow' => 60,
                'key' => 0
            ),
            "Red 032 C" => array(
                'cyan' => 0,
                'magenta' => 90,
                'yellow' => 86,
                'key' => 0
            ),
            "1797 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 99,
                'key' => 4
            ),
            "1807 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 96,
                'key' => 28
            ),
            "1817 C" => array(
                'cyan' => 0,
                'magenta' => 90,
                'yellow' => 100,
                'key' => 66
            ),
            "182 C" => array(
                'cyan' => 0,
                'magenta' => 26,
                'yellow' => 10,
                'key' => 0
            ),
            "183 C" => array(
                'cyan' => 0,
                'magenta' => 46,
                'yellow' => 21,
                'key' => 0
            ),
            "184 C" => array(
                'cyan' => 0,
                'magenta' => 68,
                'yellow' => 41,
                'key' => 0
            ),
            "185 C" => array(
                'cyan' => 0,
                'magenta' => 91,
                'yellow' => 76,
                'key' => 0
            ),
            "186 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 81,
                'key' => 4
            ),
            "187 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 79,
                'key' => 20
            ),
            "188 C" => array(
                'cyan' => 0,
                'magenta' => 97,
                'yellow' => 100,
                'key' => 50
            ),
            "189 C" => array(
                'cyan' => 0,
                'magenta' => 37,
                'yellow' => 10,
                'key' => 0
            ),
            "190 C" => array(
                'cyan' => 0,
                'magenta' => 55,
                'yellow' => 22,
                'key' => 0
            ),
            "191 C" => array(
                'cyan' => 0,
                'magenta' => 76,
                'yellow' => 38,
                'key' => 0
            ),
            "192 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 68,
                'key' => 0
            ),
            "193 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 66,
                'key' => 13
            ),
            "194 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 64,
                'key' => 33
            ),
            "195 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 60,
                'key' => 55
            ),
            "1895 C" => array(
                'cyan' => 0,
                'magenta' => 28,
                'yellow' => 7,
                'key' => 0
            ),
            "1905 C" => array(
                'cyan' => 0,
                'magenta' => 41,
                'yellow' => 9,
                'key' => 0
            ),
            "1915 C" => array(
                'cyan' => 0,
                'magenta' => 71,
                'yellow' => 20,
                'key' => 0
            ),
            "1925 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 55,
                'key' => 0
            ),
            "1935 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 57,
                'key' => 5
            ),
            "1945 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 56,
                'key' => 19
            ),
            "1955 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 60,
                'key' => 37
            ),
            "196 C" => array(
                'cyan' => 0,
                'magenta' => 25,
                'yellow' => 4,
                'key' => 0
            ),
            "197 C" => array(
                'cyan' => 0,
                'magenta' => 45,
                'yellow' => 10,
                'key' => 0
            ),
            "198 C" => array(
                'cyan' => 0,
                'magenta' => 78,
                'yellow' => 33,
                'key' => 0
            ),
            "199 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 62,
                'key' => 0
            ),
            "200 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 63,
                'key' => 12
            ),
            "201 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 63,
                'key' => 29
            ),
            "202 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 61,
                'key' => 43
            ),
            "203 C" => array(
                'cyan' => 0,
                'magenta' => 34,
                'yellow' => 3,
                'key' => 0
            ),
            "204 C" => array(
                'cyan' => 0,
                'magenta' => 58,
                'yellow' => 3,
                'key' => 0
            ),
            "205 C" => array(
                'cyan' => 0,
                'magenta' => 84,
                'yellow' => 9,
                'key' => 0
            ),
            "206 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 38,
                'key' => 3
            ),
            "207 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 43,
                'key' => 19
            ),
            "208 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 36,
                'key' => 37
            ),
            "209 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 34,
                'key' => 53
            ),
            "210 C" => array(
                'cyan' => 0,
                'magenta' => 39,
                'yellow' => 6,
                'key' => 0
            ),
            "211 C" => array(
                'cyan' => 0,
                'magenta' => 55,
                'yellow' => 8,
                'key' => 0
            ),
            "212 C" => array(
                'cyan' => 0,
                'magenta' => 72,
                'yellow' => 11,
                'key' => 0
            ),
            "213 C" => array(
                'cyan' => 0,
                'magenta' => 95,
                'yellow' => 27,
                'key' => 0
            ),
            "214 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 34,
                'key' => 8
            ),
            "215 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 35,
                'key' => 27
            ),
            "216 C" => array(
                'cyan' => 0,
                'magenta' => 95,
                'yellow' => 40,
                'key' => 49
            ),
            "217 C" => array(
                'cyan' => 0,
                'magenta' => 28,
                'yellow' => 0,
                'key' => 0
            ),
            "218 C" => array(
                'cyan' => 2,
                'magenta' => 61,
                'yellow' => 0,
                'key' => 0
            ),
            "219 C" => array(
                'cyan' => 1,
                'magenta' => 88,
                'yellow' => 0,
                'key' => 0
            ),
            "Rub. Red C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 15,
                'key' => 4
            ),
            "220 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 13,
                'key' => 17
            ),
            "221 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 15,
                'key' => 30
            ),
            "222 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 10,
                'key' => 59
            ),
            "223 C" => array(
                'cyan' => 0,
                'magenta' => 46,
                'yellow' => 0,
                'key' => 0
            ),
            "224 C" => array(
                'cyan' => 1,
                'magenta' => 63,
                'yellow' => 0,
                'key' => 0
            ),
            "225 C" => array(
                'cyan' => 1,
                'magenta' => 83,
                'yellow' => 0,
                'key' => 0
            ),
            "226 C" => array(
                'cyan' => 0,
                'magenta' => 99,
                'yellow' => 0,
                'key' => 0
            ),
            "227 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 7,
                'key' => 19
            ),
            "228 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 4,
                'key' => 41
            ),
            "229 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 15,
                'key' => 60
            ),
            "230 C" => array(
                'cyan' => 0,
                'magenta' => 34,
                'yellow' => 0,
                'key' => 0
            ),
            "231 C" => array(
                'cyan' => 1,
                'magenta' => 52,
                'yellow' => 0,
                'key' => 0
            ),
            "232 C" => array(
                'cyan' => 3,
                'magenta' => 67,
                'yellow' => 0,
                'key' => 0
            ),
            "Rhod. Red C" => array(
                'cyan' => 3,
                'magenta' => 89,
                'yellow' => 0,
                'key' => 0
            ),
            "233 C" => array(
                'cyan' => 11,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 0
            ),
            "234 C" => array(
                'cyan' => 6,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 26
            ),
            "235 C" => array(
                'cyan' => 5,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 40
            ),
            "236 C" => array(
                'cyan' => 1,
                'magenta' => 30,
                'yellow' => 0,
                'key' => 0
            ),
            "237 C" => array(
                'cyan' => 3,
                'magenta' => 49,
                'yellow' => 0,
                'key' => 0
            ),
            "238 C" => array(
                'cyan' => 6,
                'magenta' => 63,
                'yellow' => 0,
                'key' => 0
            ),
            "239 C" => array(
                'cyan' => 11,
                'magenta' => 79,
                'yellow' => 0,
                'key' => 0
            ),
            "240 C" => array(
                'cyan' => 18,
                'magenta' => 94,
                'yellow' => 0,
                'key' => 0
            ),
            "241 C" => array(
                'cyan' => 27,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 2
            ),
            "242 C" => array(
                'cyan' => 10,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 49
            ),
            "2365 C" => array(
                'cyan' => 2,
                'magenta' => 27,
                'yellow' => 0,
                'key' => 0
            ),
            "2375 C" => array(
                'cyan' => 10,
                'magenta' => 57,
                'yellow' => 0,
                'key' => 0
            ),
            "2385 C" => array(
                'cyan' => 19,
                'magenta' => 79,
                'yellow' => 0,
                'key' => 0
            ),
            "2395 C" => array(
                'cyan' => 27,
                'magenta' => 95,
                'yellow' => 0,
                'key' => 0
            ),
            "2405 C" => array(
                'cyan' => 34,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 0
            ),
            "2415 C" => array(
                'cyan' => 33,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 8
            ),
            "2425 C" => array(
                'cyan' => 37,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 26
            ),
            "243 C" => array(
                'cyan' => 5,
                'magenta' => 29,
                'yellow' => 0,
                'key' => 0
            ),
            "244 C" => array(
                'cyan' => 9,
                'magenta' => 38,
                'yellow' => 0,
                'key' => 0
            ),
            "245 C" => array(
                'cyan' => 14,
                'magenta' => 53,
                'yellow' => 0,
                'key' => 0
            ),
            "246 C" => array(
                'cyan' => 29,
                'magenta' => 90,
                'yellow' => 0,
                'key' => 0
            ),
            "247 C" => array(
                'cyan' => 36,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 0
            ),
            "248 C" => array(
                'cyan' => 40,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 2
            ),
            "249 C" => array(
                'cyan' => 40,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 28
            ),
            "250 C" => array(
                'cyan' => 5,
                'magenta' => 18,
                'yellow' => 0,
                'key' => 0
            ),
            "251 C" => array(
                'cyan' => 13,
                'magenta' => 39,
                'yellow' => 0,
                'key' => 0
            ),
            "252 C" => array(
                'cyan' => 24,
                'magenta' => 56,
                'yellow' => 0,
                'key' => 0
            ),
            "Purple C" => array(
                'cyan' => 38,
                'magenta' => 88,
                'yellow' => 0,
                'key' => 0
            ),
            "253 C" => array(
                'cyan' => 43,
                'magenta' => 95,
                'yellow' => 0,
                'key' => 0
            ),
            "254 C" => array(
                'cyan' => 50,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 0
            ),
            "255 C" => array(
                'cyan' => 51,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 25
            ),
            "256 C" => array(
                'cyan' => 7,
                'magenta' => 20,
                'yellow' => 0,
                'key' => 0
            ),
            "257 C" => array(
                'cyan' => 14,
                'magenta' => 34,
                'yellow' => 0,
                'key' => 0
            ),
            "258 C" => array(
                'cyan' => 43,
                'magenta' => 76,
                'yellow' => 0,
                'key' => 0
            ),
            "259 C" => array(
                'cyan' => 55,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 15
            ),
            "260 C" => array(
                'cyan' => 52,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 26
            ),
            "261 C" => array(
                'cyan' => 48,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 40
            ),
            "262 C" => array(
                'cyan' => 45,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 55
            ),
            "2562 C" => array(
                'cyan' => 19,
                'magenta' => 35,
                'yellow' => 0,
                'key' => 0
            ),
            "2572 C" => array(
                'cyan' => 30,
                'magenta' => 47,
                'yellow' => 0,
                'key' => 0
            ),
            "2582 C" => array(
                'cyan' => 46,
                'magenta' => 72,
                'yellow' => 0,
                'key' => 0
            ),
            "2592 C" => array(
                'cyan' => 60,
                'magenta' => 90,
                'yellow' => 0,
                'key' => 0
            ),
            "2602 C" => array(
                'cyan' => 63,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 3
            ),
            "2612 C" => array(
                'cyan' => 64,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 14
            ),
            "2622 C" => array(
                'cyan' => 57,
                'magenta' => 98,
                'yellow' => 0,
                'key' => 46
            ),
            "2563 C" => array(
                'cyan' => 22,
                'magenta' => 33,
                'yellow' => 0,
                'key' => 0
            ),
            "2573 C" => array(
                'cyan' => 30,
                'magenta' => 43,
                'yellow' => 0,
                'key' => 0
            ),
            "2583 C" => array(
                'cyan' => 46,
                'magenta' => 63,
                'yellow' => 0,
                'key' => 0
            ),
            "2593 C" => array(
                'cyan' => 61,
                'magenta' => 89,
                'yellow' => 0,
                'key' => 0
            ),
            "2603 C" => array(
                'cyan' => 69,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 2
            ),
            "2613 C" => array(
                'cyan' => 63,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 15
            ),
            "2623 C" => array(
                'cyan' => 59,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 32
            ),
            "2567 C" => array(
                'cyan' => 29,
                'magenta' => 36,
                'yellow' => 0,
                'key' => 0
            ),
            "2577 C" => array(
                'cyan' => 40,
                'magenta' => 45,
                'yellow' => 0,
                'key' => 0
            ),
            "2587 C" => array(
                'cyan' => 59,
                'magenta' => 66,
                'yellow' => 0,
                'key' => 0
            ),
            "2597 C" => array(
                'cyan' => 85,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 0
            ),
            "2607 C" => array(
                'cyan' => 81,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 7
            ),
            "2617 C" => array(
                'cyan' => 79,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 15
            ),
            "2627 C" => array(
                'cyan' => 77,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 31
            ),
            "263 C" => array(
                'cyan' => 10,
                'magenta' => 14,
                'yellow' => 0,
                'key' => 0
            ),
            "264 C" => array(
                'cyan' => 26,
                'magenta' => 28,
                'yellow' => 0,
                'key' => 0
            ),
            "265 C" => array(
                'cyan' => 54,
                'magenta' => 56,
                'yellow' => 0,
                'key' => 0
            ),
            "266 C" => array(
                'cyan' => 79,
                'magenta' => 90,
                'yellow' => 0,
                'key' => 0
            ),
            "267 C" => array(
                'cyan' => 89,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 0
            ),
            "268 C" => array(
                'cyan' => 82,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 12
            ),
            "269 C" => array(
                'cyan' => 78,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 33
            ),
            "2635 C" => array(
                'cyan' => 28,
                'magenta' => 27,
                'yellow' => 0,
                'key' => 0
            ),
            "2645 C" => array(
                'cyan' => 40,
                'magenta' => 36,
                'yellow' => 0,
                'key' => 0
            ),
            "2655 C" => array(
                'cyan' => 54,
                'magenta' => 49,
                'yellow' => 0,
                'key' => 0
            ),
            "2665 C" => array(
                'cyan' => 62,
                'magenta' => 60,
                'yellow' => 0,
                'key' => 0
            ),
            "Violet C" => array(
                'cyan' => 98,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 0
            ),
            "2685 C" => array(
                'cyan' => 96,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 10
            ),
            "2695 C" => array(
                'cyan' => 91,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 49
            ),
            "270 C" => array(
                'cyan' => 31,
                'magenta' => 27,
                'yellow' => 0,
                'key' => 0
            ),
            "271 C" => array(
                'cyan' => 43,
                'magenta' => 37,
                'yellow' => 0,
                'key' => 0
            ),
            "272 C" => array(
                'cyan' => 58,
                'magenta' => 48,
                'yellow' => 0,
                'key' => 0
            ),
            "273 C" => array(
                'cyan' => 100,
                'magenta' => 96,
                'yellow' => 0,
                'key' => 8
            ),
            "274 C" => array(
                'cyan' => 100,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 28
            ),
            "275 C" => array(
                'cyan' => 98,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 43
            ),
            "276 C" => array(
                'cyan' => 100,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 58
            ),
            "2705 C" => array(
                'cyan' => 40,
                'magenta' => 30,
                'yellow' => 0,
                'key' => 0
            ),
            "2715 C" => array(
                'cyan' => 57,
                'magenta' => 45,
                'yellow' => 0,
                'key' => 0
            ),
            "2725 C" => array(
                'cyan' => 77,
                'magenta' => 68,
                'yellow' => 0,
                'key' => 0
            ),
            "2735 C" => array(
                'cyan' => 100,
                'magenta' => 95,
                'yellow' => 0,
                'key' => 3
            ),
            "2745 C" => array(
                'cyan' => 100,
                'magenta' => 95,
                'yellow' => 0,
                'key' => 15
            ),
            "2755 C" => array(
                'cyan' => 100,
                'magenta' => 97,
                'yellow' => 0,
                'key' => 30
            ),
            "2765 C" => array(
                'cyan' => 100,
                'magenta' => 97,
                'yellow' => 0,
                'key' => 45
            ),
            "2706 C" => array(
                'cyan' => 19,
                'magenta' => 9,
                'yellow' => 0,
                'key' => 0
            ),
            "2716 C" => array(
                'cyan' => 45,
                'magenta' => 29,
                'yellow' => 0,
                'key' => 0
            ),
            "2726 C" => array(
                'cyan' => 79,
                'magenta' => 66,
                'yellow' => 0,
                'key' => 0
            ),
            "2736 C" => array(
                'cyan' => 100,
                'magenta' => 91,
                'yellow' => 0,
                'key' => 0
            ),
            "2746 C" => array(
                'cyan' => 100,
                'magenta' => 92,
                'yellow' => 0,
                'key' => 10
            ),
            "2756 C" => array(
                'cyan' => 100,
                'magenta' => 94,
                'yellow' => 0,
                'key' => 29
            ),
            "2766 C" => array(
                'cyan' => 100,
                'magenta' => 94,
                'yellow' => 0,
                'key' => 47
            ),
            "2707 C" => array(
                'cyan' => 17,
                'magenta' => 6,
                'yellow' => 0,
                'key' => 0
            ),
            "2717 C" => array(
                'cyan' => 29,
                'magenta' => 12,
                'yellow' => 0,
                'key' => 0
            ),
            "2727 C" => array(
                'cyan' => 71,
                'magenta' => 42,
                'yellow' => 0,
                'key' => 0
            ),
            "Blue 072 C" => array(
                'cyan' => 100,
                'magenta' => 88,
                'yellow' => 0,
                'key' => 5
            ),
            "2747 C" => array(
                'cyan' => 100,
                'magenta' => 85,
                'yellow' => 0,
                'key' => 13
            ),
            "2757 C" => array(
                'cyan' => 100,
                'magenta' => 82,
                'yellow' => 0,
                'key' => 30
            ),
            "2767 C" => array(
                'cyan' => 100,
                'magenta' => 78,
                'yellow' => 0,
                'key' => 54
            ),
            "2708 C" => array(
                'cyan' => 26,
                'magenta' => 10,
                'yellow' => 0,
                'key' => 0
            ),
            "2718 C" => array(
                'cyan' => 67,
                'magenta' => 41,
                'yellow' => 0,
                'key' => 0
            ),
            "2728 C" => array(
                'cyan' => 96,
                'magenta' => 69,
                'yellow' => 0,
                'key' => 0
            ),
            "2738 C" => array(
                'cyan' => 100,
                'magenta' => 87,
                'yellow' => 0,
                'key' => 2
            ),
            "2748 C" => array(
                'cyan' => 100,
                'magenta' => 88,
                'yellow' => 0,
                'key' => 14
            ),
            "2758 C" => array(
                'cyan' => 100,
                'magenta' => 80,
                'yellow' => 0,
                'key' => 26
            ),
            "2768 C" => array(
                'cyan' => 100,
                'magenta' => 78,
                'yellow' => 0,
                'key' => 44
            ),
            "277 C" => array(
                'cyan' => 27,
                'magenta' => 7,
                'yellow' => 0,
                'key' => 0
            ),
            "278 C" => array(
                'cyan' => 39,
                'magenta' => 14,
                'yellow' => 0,
                'key' => 0
            ),
            "279 C" => array(
                'cyan' => 68,
                'magenta' => 34,
                'yellow' => 0,
                'key' => 0
            ),
            "Ref. Blue C" => array(
                'cyan' => 100,
                'magenta' => 73,
                'yellow' => 0,
                'key' => 2
            ),
            "280 C" => array(
                'cyan' => 100,
                'magenta' => 72,
                'yellow' => 0,
                'key' => 18
            ),
            "281 C" => array(
                'cyan' => 100,
                'magenta' => 72,
                'yellow' => 0,
                'key' => 32
            ),
            "282 C" => array(
                'cyan' => 100,
                'magenta' => 68,
                'yellow' => 0,
                'key' => 54
            ),
            "283 C" => array(
                'cyan' => 35,
                'magenta' => 9,
                'yellow' => 0,
                'key' => 0
            ),
            "284 C" => array(
                'cyan' => 55,
                'magenta' => 19,
                'yellow' => 0,
                'key' => 0
            ),
            "285 C" => array(
                'cyan' => 89,
                'magenta' => 43,
                'yellow' => 0,
                'key' => 0
            ),
            "286 C" => array(
                'cyan' => 100,
                'magenta' => 66,
                'yellow' => 0,
                'key' => 2
            ),
            "287 C" => array(
                'cyan' => 100,
                'magenta' => 68,
                'yellow' => 0,
                'key' => 12
            ),
            "288 C" => array(
                'cyan' => 100,
                'magenta' => 67,
                'yellow' => 0,
                'key' => 23
            ),
            "289 C" => array(
                'cyan' => 100,
                'magenta' => 64,
                'yellow' => 0,
                'key' => 60
            ),
            "290 C" => array(
                'cyan' => 25,
                'magenta' => 2,
                'yellow' => 0,
                'key' => 0
            ),
            "291 C" => array(
                'cyan' => 33,
                'magenta' => 3,
                'yellow' => 0,
                'key' => 0
            ),
            "292 C" => array(
                'cyan' => 49,
                'magenta' => 11,
                'yellow' => 0,
                'key' => 0
            ),
            "293 C" => array(
                'cyan' => 100,
                'magenta' => 57,
                'yellow' => 0,
                'key' => 2
            ),
            "294 C" => array(
                'cyan' => 100,
                'magenta' => 58,
                'yellow' => 0,
                'key' => 21
            ),
            "295 C" => array(
                'cyan' => 100,
                'magenta' => 57,
                'yellow' => 0,
                'key' => 40
            ),
            "296 C" => array(
                'cyan' => 100,
                'magenta' => 46,
                'yellow' => 0,
                'key' => 70
            ),
            "2905 C" => array(
                'cyan' => 41,
                'magenta' => 2,
                'yellow' => 0,
                'key' => 0
            ),
            "2915 C" => array(
                'cyan' => 59,
                'magenta' => 7,
                'yellow' => 0,
                'key' => 0
            ),
            "2925 C" => array(
                'cyan' => 85,
                'magenta' => 24,
                'yellow' => 0,
                'key' => 0
            ),
            "2935 C" => array(
                'cyan' => 100,
                'magenta' => 46,
                'yellow' => 0,
                'key' => 0
            ),
            "2945 C" => array(
                'cyan' => 100,
                'magenta' => 45,
                'yellow' => 0,
                'key' => 14
            ),
            "2955 C" => array(
                'cyan' => 100,
                'magenta' => 45,
                'yellow' => 0,
                'key' => 37
            ),
            "2965 C" => array(
                'cyan' => 100,
                'magenta' => 38,
                'yellow' => 0,
                'key' => 64
            ),
            "297 C" => array(
                'cyan' => 49,
                'magenta' => 1,
                'yellow' => 0,
                'key' => 0
            ),
            "298 C" => array(
                'cyan' => 69,
                'magenta' => 7,
                'yellow' => 0,
                'key' => 0
            ),
            "299 C" => array(
                'cyan' => 85,
                'magenta' => 19,
                'yellow' => 0,
                'key' => 0
            ),
            "300 C" => array(
                'cyan' => 100,
                'magenta' => 44,
                'yellow' => 0,
                'key' => 0
            ),
            "301 C" => array(
                'cyan' => 100,
                'magenta' => 45,
                'yellow' => 0,
                'key' => 18
            ),
            "302 C" => array(
                'cyan' => 100,
                'magenta' => 25,
                'yellow' => 0,
                'key' => 50
            ),
            "303 C" => array(
                'cyan' => 100,
                'magenta' => 11,
                'yellow' => 0,
                'key' => 74
            ),
            "2975 C" => array(
                'cyan' => 30,
                'magenta' => 0,
                'yellow' => 5,
                'key' => 0
            ),
            "2985 C" => array(
                'cyan' => 59,
                'magenta' => 0,
                'yellow' => 6,
                'key' => 0
            ),
            "2995 C" => array(
                'cyan' => 90,
                'magenta' => 11,
                'yellow' => 0,
                'key' => 0
            ),
            "3005 C" => array(
                'cyan' => 100,
                'magenta' => 34,
                'yellow' => 0,
                'key' => 2
            ),
            "3015 C" => array(
                'cyan' => 100,
                'magenta' => 30,
                'yellow' => 0,
                'key' => 20
            ),
            "3025 C" => array(
                'cyan' => 100,
                'magenta' => 17,
                'yellow' => 0,
                'key' => 51
            ),
            "3035 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 5,
                'key' => 72
            ),
            "304 C" => array(
                'cyan' => 30,
                'magenta' => 0,
                'yellow' => 8,
                'key' => 0
            ),
            "305 C" => array(
                'cyan' => 51,
                'magenta' => 0,
                'yellow' => 9,
                'key' => 0
            ),
            "306 C" => array(
                'cyan' => 75,
                'magenta' => 0,
                'yellow' => 7,
                'key' => 0
            ),
            "Proc. Blue C" => array(
                'cyan' => 100,
                'magenta' => 10,
                'yellow' => 0,
                'key' => 10
            ),
            "307 C" => array(
                'cyan' => 100,
                'magenta' => 16,
                'yellow' => 0,
                'key' => 27
            ),
            "308 C" => array(
                'cyan' => 100,
                'magenta' => 5,
                'yellow' => 0,
                'key' => 47
            ),
            "309 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 9,
                'key' => 72
            ),
            "310 C" => array(
                'cyan' => 43,
                'magenta' => 0,
                'yellow' => 10,
                'key' => 0
            ),
            "311 C" => array(
                'cyan' => 63,
                'magenta' => 0,
                'yellow' => 12,
                'key' => 0
            ),
            "312 C" => array(
                'cyan' => 96,
                'magenta' => 0,
                'yellow' => 11,
                'key' => 0
            ),
            "313 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 8,
                'key' => 13
            ),
            "314 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 9,
                'key' => 30
            ),
            "315 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 12,
                'key' => 43
            ),
            "316 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 27,
                'key' => 68
            ),
            "3105 C" => array(
                'cyan' => 43,
                'magenta' => 0,
                'yellow' => 12,
                'key' => 0
            ),
            "3115 C" => array(
                'cyan' => 63,
                'magenta' => 0,
                'yellow' => 18,
                'key' => 0
            ),
            "3125 C" => array(
                'cyan' => 83,
                'magenta' => 0,
                'yellow' => 21,
                'key' => 0
            ),
            "3135 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 16,
                'key' => 9
            ),
            "3145 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 19,
                'key' => 23
            ),
            "3155 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 24,
                'key' => 38
            ),
            "3165 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 28,
                'key' => 65
            ),
            "317 C" => array(
                'cyan' => 18,
                'magenta' => 0,
                'yellow' => 8,
                'key' => 0
            ),
            "318 C" => array(
                'cyan' => 38,
                'magenta' => 0,
                'yellow' => 15,
                'key' => 0
            ),
            "319 C" => array(
                'cyan' => 52,
                'magenta' => 0,
                'yellow' => 19,
                'key' => 0
            ),
            "320 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 7
            ),
            "321 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 23
            ),
            "322 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 33,
                'key' => 35
            ),
            "323 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 38,
                'key' => 47
            ),
            "324 C" => array(
                'cyan' => 28,
                'magenta' => 0,
                'yellow' => 12,
                'key' => 0
            ),
            "325 C" => array(
                'cyan' => 56,
                'magenta' => 0,
                'yellow' => 26,
                'key' => 0
            ),
            "326 C" => array(
                'cyan' => 87,
                'magenta' => 0,
                'yellow' => 38,
                'key' => 0
            ),
            "327 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 44,
                'key' => 17
            ),
            "328 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 45,
                'key' => 32
            ),
            "329 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 46,
                'key' => 46
            ),
            "330 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 48,
                'key' => 60
            ),
            "3242 C" => array(
                'cyan' => 37,
                'magenta' => 0,
                'yellow' => 18,
                'key' => 0
            ),
            "3252 C" => array(
                'cyan' => 47,
                'magenta' => 0,
                'yellow' => 24,
                'key' => 0
            ),
            "3262 C" => array(
                'cyan' => 71,
                'magenta' => 0,
                'yellow' => 33,
                'key' => 0
            ),
            "3272 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 44,
                'key' => 0
            ),
            "3282 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 46,
                'key' => 15
            ),
            "3292 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 49,
                'key' => 46
            ),
            "3302 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 54,
                'key' => 69
            ),
            "3245 C" => array(
                'cyan' => 34,
                'magenta' => 0,
                'yellow' => 19,
                'key' => 0
            ),
            "3255 C" => array(
                'cyan' => 49,
                'magenta' => 0,
                'yellow' => 28,
                'key' => 0
            ),
            "3265 C" => array(
                'cyan' => 69,
                'magenta' => 0,
                'yellow' => 37,
                'key' => 0
            ),
            "3275 C" => array(
                'cyan' => 95,
                'magenta' => 0,
                'yellow' => 47,
                'key' => 0
            ),
            "3285 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 50,
                'key' => 7
            ),
            "3295 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 53,
                'key' => 21
            ),
            "3305 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 61,
                'key' => 61
            ),
            "3248 C" => array(
                'cyan' => 43,
                'magenta' => 0,
                'yellow' => 24,
                'key' => 0
            ),
            "3258 C" => array(
                'cyan' => 59,
                'magenta' => 0,
                'yellow' => 33,
                'key' => 0
            ),
            "3268 C" => array(
                'cyan' => 90,
                'magenta' => 0,
                'yellow' => 49,
                'key' => 0
            ),
            "3278 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 55,
                'key' => 5
            ),
            "3288 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 54,
                'key' => 20
            ),
            "3298 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 57,
                'key' => 42
            ),
            "3308 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 60,
                'key' => 72
            ),
            "331 C" => array(
                'cyan' => 24,
                'magenta' => 0,
                'yellow' => 16,
                'key' => 0
            ),
            "332 C" => array(
                'cyan' => 30,
                'magenta' => 0,
                'yellow' => 20,
                'key' => 0
            ),
            "333 C" => array(
                'cyan' => 43,
                'magenta' => 0,
                'yellow' => 27,
                'key' => 0
            ),
            "Green C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 59,
                'key' => 0
            ),
            "334 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 60,
                'key' => 3
            ),
            "335 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 65,
                'key' => 30
            ),
            "336 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 67,
                'key' => 47
            ),
            "337 C" => array(
                'cyan' => 31,
                'magenta' => 0,
                'yellow' => 20,
                'key' => 0
            ),
            "338 C" => array(
                'cyan' => 47,
                'magenta' => 0,
                'yellow' => 32,
                'key' => 0
            ),
            "339 C" => array(
                'cyan' => 84,
                'magenta' => 0,
                'yellow' => 56,
                'key' => 0
            ),
            "340 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 66,
                'key' => 9
            ),
            "341 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 67,
                'key' => 29
            ),
            "342 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 71,
                'key' => 43
            ),
            "343 C" => array(
                'cyan' => 98,
                'magenta' => 0,
                'yellow' => 72,
                'key' => 61
            ),
            "3375 C" => array(
                'cyan' => 35,
                'magenta' => 0,
                'yellow' => 25,
                'key' => 0
            ),
            "3385 C" => array(
                'cyan' => 45,
                'magenta' => 0,
                'yellow' => 33,
                'key' => 0
            ),
            "3395 C" => array(
                'cyan' => 61,
                'magenta' => 0,
                'yellow' => 45,
                'key' => 0
            ),
            "3405 C" => array(
                'cyan' => 85,
                'magenta' => 0,
                'yellow' => 65,
                'key' => 0
            ),
            "3415 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 77,
                'key' => 22
            ),
            "3425 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 78,
                'key' => 42
            ),
            "3435 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 81,
                'key' => 66
            ),
            "344 C" => array(
                'cyan' => 27,
                'magenta' => 0,
                'yellow' => 23,
                'key' => 0
            ),
            "345 C" => array(
                'cyan' => 38,
                'magenta' => 0,
                'yellow' => 32,
                'key' => 0
            ),
            "346 C" => array(
                'cyan' => 55,
                'magenta' => 0,
                'yellow' => 47,
                'key' => 0
            ),
            "347 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 86,
                'key' => 3
            ),
            "348 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 85,
                'key' => 24
            ),
            "349 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 91,
                'key' => 42
            ),
            "350 C" => array(
                'cyan' => 79,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 75
            ),
            "351 C" => array(
                'cyan' => 17,
                'magenta' => 0,
                'yellow' => 16,
                'key' => 0
            ),
            "352 C" => array(
                'cyan' => 27,
                'magenta' => 0,
                'yellow' => 25,
                'key' => 0
            ),
            "353 C" => array(
                'cyan' => 38,
                'magenta' => 0,
                'yellow' => 36,
                'key' => 0
            ),
            "354 C" => array(
                'cyan' => 80,
                'magenta' => 0,
                'yellow' => 90,
                'key' => 0
            ),
            "355 C" => array(
                'cyan' => 94,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 0
            ),
            "356 C" => array(
                'cyan' => 95,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 27
            ),
            "357 C" => array(
                'cyan' => 80,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 56
            ),
            "358 C" => array(
                'cyan' => 27,
                'magenta' => 0,
                'yellow' => 38,
                'key' => 0
            ),
            "359 C" => array(
                'cyan' => 36,
                'magenta' => 0,
                'yellow' => 49,
                'key' => 0
            ),
            "360 C" => array(
                'cyan' => 58,
                'magenta' => 0,
                'yellow' => 80,
                'key' => 0
            ),
            "361 C" => array(
                'cyan' => 69,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 0
            ),
            "362 C" => array(
                'cyan' => 70,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 9
            ),
            "363 C" => array(
                'cyan' => 68,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 24
            ),
            "364 C" => array(
                'cyan' => 65,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 42
            ),
            "365 C" => array(
                'cyan' => 12,
                'magenta' => 0,
                'yellow' => 29,
                'key' => 0
            ),
            "366 C" => array(
                'cyan' => 20,
                'magenta' => 0,
                'yellow' => 44,
                'key' => 0
            ),
            "367 C" => array(
                'cyan' => 32,
                'magenta' => 0,
                'yellow' => 59,
                'key' => 0
            ),
            "368 C" => array(
                'cyan' => 57,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 0
            ),
            "369 C" => array(
                'cyan' => 59,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 7
            ),
            "370 C" => array(
                'cyan' => 56,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 27
            ),
            "371 C" => array(
                'cyan' => 43,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 56
            ),
            "372 C" => array(
                'cyan' => 10,
                'magenta' => 0,
                'yellow' => 33,
                'key' => 0
            ),
            "373 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 46,
                'key' => 0
            ),
            "374 C" => array(
                'cyan' => 24,
                'magenta' => 0,
                'yellow' => 57,
                'key' => 0
            ),
            "375 C" => array(
                'cyan' => 41,
                'magenta' => 0,
                'yellow' => 78,
                'key' => 0
            ),
            "376 C" => array(
                'cyan' => 50,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 0
            ),
            "377 C" => array(
                'cyan' => 45,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 24
            ),
            "378 C" => array(
                'cyan' => 34,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 60
            ),
            "379 C" => array(
                'cyan' => 9,
                'magenta' => 0,
                'yellow' => 58,
                'key' => 0
            ),
            "380 C" => array(
                'cyan' => 13,
                'magenta' => 0,
                'yellow' => 72,
                'key' => 0
            ),
            "381 C" => array(
                'cyan' => 20,
                'magenta' => 0,
                'yellow' => 91,
                'key' => 0
            ),
            "382 C" => array(
                'cyan' => 29,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 0
            ),
            "383 C" => array(
                'cyan' => 20,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 19
            ),
            "384 C" => array(
                'cyan' => 18,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 31
            ),
            "385 C" => array(
                'cyan' => 3,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 58
            ),
            "386 C" => array(
                'cyan' => 6,
                'magenta' => 0,
                'yellow' => 56,
                'key' => 0
            ),
            "387 C" => array(
                'cyan' => 10,
                'magenta' => 0,
                'yellow' => 74,
                'key' => 0
            ),
            "388 C" => array(
                'cyan' => 14,
                'magenta' => 0,
                'yellow' => 79,
                'key' => 0
            ),
            "389 C" => array(
                'cyan' => 20,
                'magenta' => 0,
                'yellow' => 85,
                'key' => 0
            ),
            "390 C" => array(
                'cyan' => 22,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 8
            ),
            "391 C" => array(
                'cyan' => 13,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 33
            ),
            "392 C" => array(
                'cyan' => 7,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 49
            ),
            "393 C" => array(
                'cyan' => 3,
                'magenta' => 0,
                'yellow' => 55,
                'key' => 0
            ),
            "394 C" => array(
                'cyan' => 6,
                'magenta' => 0,
                'yellow' => 76,
                'key' => 0
            ),
            "395 C" => array(
                'cyan' => 8,
                'magenta' => 0,
                'yellow' => 85,
                'key' => 0
            ),
            "396 C" => array(
                'cyan' => 11,
                'magenta' => 0,
                'yellow' => 94,
                'key' => 0
            ),
            "397 C" => array(
                'cyan' => 10,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 11
            ),
            "398 C" => array(
                'cyan' => 7,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 28
            ),
            "399 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 43
            ),
            "3935 C" => array(
                'cyan' => 1,
                'magenta' => 0,
                'yellow' => 68,
                'key' => 0
            ),
            "3945 C" => array(
                'cyan' => 3,
                'magenta' => 0,
                'yellow' => 85,
                'key' => 0
            ),
            "3955 C" => array(
                'cyan' => 6,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 0
            ),
            "3965 C" => array(
                'cyan' => 8,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 0
            ),
            "3975 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 29
            ),
            "3985 C" => array(
                'cyan' => 0,
                'magenta' => 3,
                'yellow' => 100,
                'key' => 41
            ),
            "3995 C" => array(
                'cyan' => 0,
                'magenta' => 3,
                'yellow' => 100,
                'key' => 64
            ),
            "400 C" => array(
                'cyan' => 0,
                'magenta' => 3,
                'yellow' => 6,
                'key' => 16
            ),
            "401 C" => array(
                'cyan' => 0,
                'magenta' => 5,
                'yellow' => 11,
                'key' => 23
            ),
            "402 C" => array(
                'cyan' => 0,
                'magenta' => 6,
                'yellow' => 14,
                'key' => 31
            ),
            "403 C" => array(
                'cyan' => 0,
                'magenta' => 7,
                'yellow' => 17,
                'key' => 43
            ),
            "404 C" => array(
                'cyan' => 0,
                'magenta' => 8,
                'yellow' => 22,
                'key' => 56
            ),
            "405 C" => array(
                'cyan' => 0,
                'magenta' => 10,
                'yellow' => 33,
                'key' => 72
            ),
            "b C" => array(
                'cyan' => 0,
                'magenta' => 13,
                'yellow' => 49,
                'key' => 98
            ),
            "406 C" => array(
                'cyan' => 0,
                'magenta' => 5,
                'yellow' => 6,
                'key' => 16
            ),
            "407 C" => array(
                'cyan' => 0,
                'magenta' => 8,
                'yellow' => 9,
                'key' => 26
            ),
            "408 C" => array(
                'cyan' => 0,
                'magenta' => 10,
                'yellow' => 11,
                'key' => 34
            ),
            "409 C" => array(
                'cyan' => 0,
                'magenta' => 13,
                'yellow' => 15,
                'key' => 45
            ),
            "410 C" => array(
                'cyan' => 0,
                'magenta' => 18,
                'yellow' => 21,
                'key' => 56
            ),
            "411 C" => array(
                'cyan' => 0,
                'magenta' => 27,
                'yellow' => 36,
                'key' => 72
            ),
            "412 C" => array(
                'cyan' => 0,
                'magenta' => 30,
                'yellow' => 66,
                'key' => 98
            ),
            "413 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 9,
                'key' => 20
            ),
            "414 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 10,
                'key' => 30
            ),
            "415 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 12,
                'key' => 41
            ),
            "416 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 16,
                'key' => 50
            ),
            "417 C" => array(
                'cyan' => 1,
                'magenta' => 0,
                'yellow' => 25,
                'key' => 65
            ),
            "418 C" => array(
                'cyan' => 3,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 75
            ),
            "419 C" => array(
                'cyan' => 29,
                'magenta' => 0,
                'yellow' => 36,
                'key' => 100
            ),
            "420 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 15
            ),
            "421 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 26
            ),
            "422 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 33
            ),
            "423 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 44
            ),
            "424 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 61
            ),
            "425 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 77
            ),
            "426 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 99
            ),
            "427 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 11
            ),
            "428 C" => array(
                'cyan' => 2,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 18
            ),
            "429 C" => array(
                'cyan' => 3,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 32
            ),
            "430 C" => array(
                'cyan' => 5,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 45
            ),
            "431 C" => array(
                'cyan' => 11,
                'magenta' => 1,
                'yellow' => 0,
                'key' => 64
            ),
            "432 C" => array(
                'cyan' => 23,
                'magenta' => 2,
                'yellow' => 0,
                'key' => 77
            ),
            "433 C" => array(
                'cyan' => 33,
                'magenta' => 3,
                'yellow' => 0,
                'key' => 95
            ),
            "434 C" => array(
                'cyan' => 7,
                'magenta' => 9,
                'yellow' => 10,
                'key' => 0
            ),
            "435 C" => array(
                'cyan' => 13,
                'magenta' => 15,
                'yellow' => 15,
                'key' => 0
            ),
            "436 C" => array(
                'cyan' => 24,
                'magenta' => 25,
                'yellow' => 26,
                'key' => 0
            ),
            "437 C" => array(
                'cyan' => 46,
                'magenta' => 45,
                'yellow' => 49,
                'key' => 0
            ),
            "438 C" => array(
                'cyan' => 75,
                'magenta' => 68,
                'yellow' => 100,
                'key' => 10
            ),
            "439 C" => array(
                'cyan' => 80,
                'magenta' => 73,
                'yellow' => 100,
                'key' => 20
            ),
            "440 C" => array(
                'cyan' => 82,
                'magenta' => 76,
                'yellow' => 100,
                'key' => 30
            ),
            "441 C" => array(
                'cyan' => 6,
                'magenta' => 0,
                'yellow' => 7,
                'key' => 9
            ),
            "442 C" => array(
                'cyan' => 8,
                'magenta' => 0,
                'yellow' => 9,
                'key' => 19
            ),
            "443 C" => array(
                'cyan' => 12,
                'magenta' => 0,
                'yellow' => 12,
                'key' => 30
            ),
            "444 C" => array(
                'cyan' => 15,
                'magenta' => 0,
                'yellow' => 15,
                'key' => 42
            ),
            "445 C" => array(
                'cyan' => 20,
                'magenta' => 0,
                'yellow' => 20,
                'key' => 65
            ),
            "446 C" => array(
                'cyan' => 21,
                'magenta' => 0,
                'yellow' => 23,
                'key' => 75
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "447 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 82
            ),
            "b 2 C" => array(
                'cyan' => 0,
                'magenta' => 3,
                'yellow' => 55,
                'key' => 87
            ),
            "b 3 C" => array(
                'cyan' => 60,
                'magenta' => 0,
                'yellow' => 60,
                'key' => 91
            ),
            "b 4 C" => array(
                'cyan' => 0,
                'magenta' => 22,
                'yellow' => 100,
                'key' => 89
            ),
            "b 5 C" => array(
                'cyan' => 0,
                'magenta' => 40,
                'yellow' => 22,
                'key' => 87
            ),
            "b 6 C" => array(
                'cyan' => 100,
                'magenta' => 35,
                'yellow' => 0,
                'key' => 100
            ),
            "b 7 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 15,
                'key' => 82
            ),
            "448 C" => array(
                'cyan' => 65,
                'magenta' => 58,
                'yellow' => 100,
                'key' => 35
            ),
            "449 C" => array(
                'cyan' => 65,
                'magenta' => 55,
                'yellow' => 100,
                'key' => 28
            ),
            "450 C" => array(
                'cyan' => 60,
                'magenta' => 50,
                'yellow' => 100,
                'key' => 22
            ),
            "451 C" => array(
                'cyan' => 33,
                'magenta' => 28,
                'yellow' => 58,
                'key' => 0
            ),
            "452 C" => array(
                'cyan' => 24,
                'magenta' => 18,
                'yellow' => 42,
                'key' => 0
            ),
            "453 C" => array(
                'cyan' => 14,
                'magenta' => 10,
                'yellow' => 27,
                'key' => 0
            ),
            "454 C" => array(
                'cyan' => 9,
                'magenta' => 6,
                'yellow' => 17,
                'key' => 0
            ),
            "4485 C" => array(
                'cyan' => 0,
                'magenta' => 26,
                'yellow' => 100,
                'key' => 69
            ),
            "4495 C" => array(
                'cyan' => 0,
                'magenta' => 20,
                'yellow' => 95,
                'key' => 46
            ),
            "4505 C" => array(
                'cyan' => 0,
                'magenta' => 15,
                'yellow' => 78,
                'key' => 36
            ),
            "4515 C" => array(
                'cyan' => 0,
                'magenta' => 9,
                'yellow' => 50,
                'key' => 24
            ),
            "4525 C" => array(
                'cyan' => 0,
                'magenta' => 7,
                'yellow' => 39,
                'key' => 17
            ),
            "4535 C" => array(
                'cyan' => 0,
                'magenta' => 4,
                'yellow' => 30,
                'key' => 11
            ),
            "4545 C" => array(
                'cyan' => 0,
                'magenta' => 3,
                'yellow' => 19,
                'key' => 6
            ),
            "455 C" => array(
                'cyan' => 0,
                'magenta' => 17,
                'yellow' => 100,
                'key' => 65
            ),
            "456 C" => array(
                'cyan' => 0,
                'magenta' => 15,
                'yellow' => 100,
                'key' => 43
            ),
            "457 C" => array(
                'cyan' => 0,
                'magenta' => 15,
                'yellow' => 100,
                'key' => 28
            ),
            "458 C" => array(
                'cyan' => 10,
                'magenta' => 10,
                'yellow' => 73,
                'key' => 0
            ),
            "459 C" => array(
                'cyan' => 6,
                'magenta' => 7,
                'yellow' => 55,
                'key' => 0
            ),
            "460 C" => array(
                'cyan' => 4,
                'magenta' => 5,
                'yellow' => 44,
                'key' => 0
            ),
            "461 C" => array(
                'cyan' => 3,
                'magenta' => 3,
                'yellow' => 35,
                'key' => 0
            ),
            "462 C" => array(
                'cyan' => 50,
                'magenta' => 58,
                'yellow' => 100,
                'key' => 45
            ),
            "463 C" => array(
                'cyan' => 30,
                'magenta' => 56,
                'yellow' => 100,
                'key' => 37
            ),
            "464 C" => array(
                'cyan' => 10,
                'magenta' => 49,
                'yellow' => 100,
                'key' => 35
            ),
            "465 C" => array(
                'cyan' => 20,
                'magenta' => 32,
                'yellow' => 58,
                'key' => 0
            ),
            "466 C" => array(
                'cyan' => 12,
                'magenta' => 22,
                'yellow' => 43,
                'key' => 0
            ),
            "467 C" => array(
                'cyan' => 9,
                'magenta' => 15,
                'yellow' => 34,
                'key' => 0
            ),
            "468 C" => array(
                'cyan' => 6,
                'magenta' => 9,
                'yellow' => 23,
                'key' => 0
            ),
            "4625 C" => array(
                'cyan' => 0,
                'magenta' => 60,
                'yellow' => 100,
                'key' => 79
            ),
            "4635 C" => array(
                'cyan' => 0,
                'magenta' => 48,
                'yellow' => 96,
                'key' => 44
            ),
            "4645 C" => array(
                'cyan' => 0,
                'magenta' => 37,
                'yellow' => 68,
                'key' => 28
            ),
            "4655 C" => array(
                'cyan' => 0,
                'magenta' => 26,
                'yellow' => 45,
                'key' => 18
            ),
            "4665 C" => array(
                'cyan' => 0,
                'magenta' => 18,
                'yellow' => 32,
                'key' => 10
            ),
            "4675 C" => array(
                'cyan' => 0,
                'magenta' => 11,
                'yellow' => 21,
                'key' => 6
            ),
            "4685 C" => array(
                'cyan' => 0,
                'magenta' => 7,
                'yellow' => 14,
                'key' => 4
            ),
            "469 C" => array(
                'cyan' => 0,
                'magenta' => 52,
                'yellow' => 100,
                'key' => 62
            ),
            "470 C" => array(
                'cyan' => 0,
                'magenta' => 58,
                'yellow' => 100,
                'key' => 33
            ),
            "471 C" => array(
                'cyan' => 0,
                'magenta' => 59,
                'yellow' => 100,
                'key' => 18
            ),
            "472 C" => array(
                'cyan' => 0,
                'magenta' => 34,
                'yellow' => 52,
                'key' => 0
            ),
            "473 C" => array(
                'cyan' => 0,
                'magenta' => 23,
                'yellow' => 36,
                'key' => 0
            ),
            "474 C" => array(
                'cyan' => 0,
                'magenta' => 15,
                'yellow' => 26,
                'key' => 0
            ),
            "475 C" => array(
                'cyan' => 0,
                'magenta' => 11,
                'yellow' => 20,
                'key' => 0
            ),
            "4695 C" => array(
                'cyan' => 0,
                'magenta' => 81,
                'yellow' => 100,
                'key' => 77
            ),
            "4705 C" => array(
                'cyan' => 0,
                'magenta' => 62,
                'yellow' => 71,
                'key' => 49
            ),
            "4715 C" => array(
                'cyan' => 0,
                'magenta' => 42,
                'yellow' => 45,
                'key' => 34
            ),
            "4725 C" => array(
                'cyan' => 0,
                'magenta' => 32,
                'yellow' => 35,
                'key' => 25
            ),
            "4735 C" => array(
                'cyan' => 0,
                'magenta' => 22,
                'yellow' => 23,
                'key' => 15
            ),
            "4745 C" => array(
                'cyan' => 0,
                'magenta' => 17,
                'yellow' => 18,
                'key' => 10
            ),
            "4755 C" => array(
                'cyan' => 0,
                'magenta' => 10,
                'yellow' => 12,
                'key' => 6
            ),
            "476 C" => array(
                'cyan' => 57,
                'magenta' => 80,
                'yellow' => 100,
                'key' => 45
            ),
            "477 C" => array(
                'cyan' => 50,
                'magenta' => 85,
                'yellow' => 100,
                'key' => 35
            ),
            "478 C" => array(
                'cyan' => 40,
                'magenta' => 86,
                'yellow' => 100,
                'key' => 30
            ),
            "479 C" => array(
                'cyan' => 30,
                'magenta' => 48,
                'yellow' => 57,
                'key' => 0
            ),
            "480 C" => array(
                'cyan' => 15,
                'magenta' => 29,
                'yellow' => 33,
                'key' => 0
            ),
            "481 C" => array(
                'cyan' => 9,
                'magenta' => 19,
                'yellow' => 23,
                'key' => 0
            ),
            "482 C" => array(
                'cyan' => 5,
                'magenta' => 11,
                'yellow' => 15,
                'key' => 0
            ),
            "483 C" => array(
                'cyan' => 0,
                'magenta' => 91,
                'yellow' => 100,
                'key' => 60
            ),
            "484 C" => array(
                'cyan' => 0,
                'magenta' => 95,
                'yellow' => 100,
                'key' => 29
            ),
            "485 C" => array(
                'cyan' => 0,
                'magenta' => 95,
                'yellow' => 100,
                'key' => 0
            ),
            "486 C" => array(
                'cyan' => 0,
                'magenta' => 47,
                'yellow' => 41,
                'key' => 0
            ),
            "487 C" => array(
                'cyan' => 0,
                'magenta' => 35,
                'yellow' => 28,
                'key' => 0
            ),
            "488 C" => array(
                'cyan' => 0,
                'magenta' => 26,
                'yellow' => 19,
                'key' => 0
            ),
            "489 C" => array(
                'cyan' => 0,
                'magenta' => 15,
                'yellow' => 11,
                'key' => 0
            ),
            "490 C" => array(
                'cyan' => 0,
                'magenta' => 74,
                'yellow' => 100,
                'key' => 72
            ),
            "491 C" => array(
                'cyan' => 0,
                'magenta' => 79,
                'yellow' => 100,
                'key' => 52
            ),
            "492 C" => array(
                'cyan' => 0,
                'magenta' => 70,
                'yellow' => 66,
                'key' => 30
            ),
            "493 C" => array(
                'cyan' => 0,
                'magenta' => 46,
                'yellow' => 23,
                'key' => 5
            ),
            "494 C" => array(
                'cyan' => 0,
                'magenta' => 33,
                'yellow' => 13,
                'key' => 0
            ),
            "495 C" => array(
                'cyan' => 0,
                'magenta' => 24,
                'yellow' => 11,
                'key' => 0
            ),
            "496 C" => array(
                'cyan' => 0,
                'magenta' => 16,
                'yellow' => 9,
                'key' => 0
            ),
            "497 C" => array(
                'cyan' => 0,
                'magenta' => 70,
                'yellow' => 100,
                'key' => 78
            ),
            "498 C" => array(
                'cyan' => 0,
                'magenta' => 64,
                'yellow' => 100,
                'key' => 60
            ),
            "499 C" => array(
                'cyan' => 0,
                'magenta' => 58,
                'yellow' => 100,
                'key' => 49
            ),
            "500 C" => array(
                'cyan' => 0,
                'magenta' => 38,
                'yellow' => 21,
                'key' => 11
            ),
            "501 C" => array(
                'cyan' => 0,
                'magenta' => 27,
                'yellow' => 13,
                'key' => 3
            ),
            "502 C" => array(
                'cyan' => 0,
                'magenta' => 18,
                'yellow' => 10,
                'key' => 1
            ),
            "503 C" => array(
                'cyan' => 0,
                'magenta' => 11,
                'yellow' => 8,
                'key' => 0
            ),
            "4975 C" => array(
                'cyan' => 0,
                'magenta' => 73,
                'yellow' => 100,
                'key' => 80
            ),
            "4985 C" => array(
                'cyan' => 0,
                'magenta' => 59,
                'yellow' => 48,
                'key' => 48
            ),
            "4995 C" => array(
                'cyan' => 0,
                'magenta' => 48,
                'yellow' => 38,
                'key' => 34
            ),
            "5005 C" => array(
                'cyan' => 0,
                'magenta' => 38,
                'yellow' => 27,
                'key' => 23
            ),
            "5015 C" => array(
                'cyan' => 0,
                'magenta' => 25,
                'yellow' => 15,
                'key' => 11
            ),
            "5025 C" => array(
                'cyan' => 0,
                'magenta' => 18,
                'yellow' => 12,
                'key' => 7
            ),
            "5035 C" => array(
                'cyan' => 0,
                'magenta' => 10,
                'yellow' => 9,
                'key' => 3
            ),
            "504 C" => array(
                'cyan' => 65,
                'magenta' => 100,
                'yellow' => 100,
                'key' => 35
            ),
            "505 C" => array(
                'cyan' => 50,
                'magenta' => 100,
                'yellow' => 100,
                'key' => 25
            ),
            "506 C" => array(
                'cyan' => 45,
                'magenta' => 100,
                'yellow' => 100,
                'key' => 15
            ),
            "507 C" => array(
                'cyan' => 11,
                'magenta' => 45,
                'yellow' => 22,
                'key' => 0
            ),
            "508 C" => array(
                'cyan' => 4,
                'magenta' => 34,
                'yellow' => 11,
                'key' => 0
            ),
            "509 C" => array(
                'cyan' => 0,
                'magenta' => 24,
                'yellow' => 7,
                'key' => 0
            ),
            "510 C" => array(
                'cyan' => 0,
                'magenta' => 17,
                'yellow' => 6,
                'key' => 0
            ),
            "511 C" => array(
                'cyan' => 60,
                'magenta' => 100,
                'yellow' => 45,
                'key' => 30
            ),
            "512 C" => array(
                'cyan' => 50,
                'magenta' => 100,
                'yellow' => 15,
                'key' => 10
            ),
            "513 C" => array(
                'cyan' => 44,
                'magenta' => 83,
                'yellow' => 0,
                'key' => 0
            ),
            "514 C" => array(
                'cyan' => 15,
                'magenta' => 50,
                'yellow' => 0,
                'key' => 0
            ),
            "515 C" => array(
                'cyan' => 7,
                'magenta' => 38,
                'yellow' => 0,
                'key' => 0
            ),
            "516 C" => array(
                'cyan' => 3,
                'magenta' => 27,
                'yellow' => 0,
                'key' => 0
            ),
            "517 C" => array(
                'cyan' => 0,
                'magenta' => 18,
                'yellow' => 0,
                'key' => 0
            ),
            "5115 C" => array(
                'cyan' => 75,
                'magenta' => 100,
                'yellow' => 70,
                'key' => 15
            ),
            "5125 C" => array(
                'cyan' => 65,
                'magenta' => 86,
                'yellow' => 49,
                'key' => 0
            ),
            "5135 C" => array(
                'cyan' => 47,
                'magenta' => 64,
                'yellow' => 28,
                'key' => 0
            ),
            "5145 C" => array(
                'cyan' => 30,
                'magenta' => 44,
                'yellow' => 13,
                'key' => 0
            ),
            "5155 C" => array(
                'cyan' => 17,
                'magenta' => 29,
                'yellow' => 8,
                'key' => 0
            ),
            "5165 C" => array(
                'cyan' => 8,
                'magenta' => 17,
                'yellow' => 5,
                'key' => 0
            ),
            "5175 C" => array(
                'cyan' => 5,
                'magenta' => 10,
                'yellow' => 3,
                'key' => 0
            ),
            "518 C" => array(
                'cyan' => 70,
                'magenta' => 100,
                'yellow' => 55,
                'key' => 25
            ),
            "519 C" => array(
                'cyan' => 67,
                'magenta' => 100,
                'yellow' => 30,
                'key' => 10
            ),
            "520 C" => array(
                'cyan' => 64,
                'magenta' => 100,
                'yellow' => 12,
                'key' => 0
            ),
            "521 C" => array(
                'cyan' => 27,
                'magenta' => 47,
                'yellow' => 0,
                'key' => 0
            ),
            "522 C" => array(
                'cyan' => 17,
                'magenta' => 37,
                'yellow' => 0,
                'key' => 0
            ),
            "523 C" => array(
                'cyan' => 10,
                'magenta' => 26,
                'yellow' => 0,
                'key' => 0
            ),
            "524 C" => array(
                'cyan' => 6,
                'magenta' => 15,
                'yellow' => 0,
                'key' => 0
            ),
            "5185 C" => array(
                'cyan' => 80,
                'magenta' => 100,
                'yellow' => 85,
                'key' => 25
            ),
            "5195 C" => array(
                'cyan' => 72,
                'magenta' => 90,
                'yellow' => 75,
                'key' => 15
            ),
            "5205 C" => array(
                'cyan' => 50,
                'magenta' => 58,
                'yellow' => 50,
                'key' => 0
            ),
            "5215 C" => array(
                'cyan' => 28,
                'magenta' => 35,
                'yellow' => 24,
                'key' => 0
            ),
            "5225 C" => array(
                'cyan' => 17,
                'magenta' => 25,
                'yellow' => 15,
                'key' => 0
            ),
            "5235 C" => array(
                'cyan' => 10,
                'magenta' => 15,
                'yellow' => 10,
                'key' => 0
            ),
            "5245 C" => array(
                'cyan' => 6,
                'magenta' => 8,
                'yellow' => 7,
                'key' => 0
            ),
            "525 C" => array(
                'cyan' => 84,
                'magenta' => 100,
                'yellow' => 45,
                'key' => 5
            ),
            "526 C" => array(
                'cyan' => 76,
                'magenta' => 100,
                'yellow' => 7,
                'key' => 0
            ),
            "527 C" => array(
                'cyan' => 73,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 0
            ),
            "528 C" => array(
                'cyan' => 41,
                'magenta' => 55,
                'yellow' => 0,
                'key' => 0
            ),
            "529 C" => array(
                'cyan' => 26,
                'magenta' => 40,
                'yellow' => 0,
                'key' => 0
            ),
            "530 C" => array(
                'cyan' => 18,
                'magenta' => 31,
                'yellow' => 0,
                'key' => 0
            ),
            "531 C" => array(
                'cyan' => 10,
                'magenta' => 20,
                'yellow' => 0,
                'key' => 0
            ),
            "5255 C" => array(
                'cyan' => 100,
                'magenta' => 80,
                'yellow' => 0,
                'key' => 55
            ),
            "5265 C" => array(
                'cyan' => 77,
                'magenta' => 70,
                'yellow' => 0,
                'key' => 40
            ),
            "5275 C" => array(
                'cyan' => 60,
                'magenta' => 47,
                'yellow' => 0,
                'key' => 30
            ),
            "5285 C" => array(
                'cyan' => 31,
                'magenta' => 27,
                'yellow' => 0,
                'key' => 20
            ),
            "5295 C" => array(
                'cyan' => 20,
                'magenta' => 15,
                'yellow' => 0,
                'key' => 10
            ),
            "5305 C" => array(
                'cyan' => 14,
                'magenta' => 10,
                'yellow' => 0,
                'key' => 6
            ),
            "5315 C" => array(
                'cyan' => 6,
                'magenta' => 6,
                'yellow' => 0,
                'key' => 5
            ),
            "532 C" => array(
                'cyan' => 100,
                'magenta' => 80,
                'yellow' => 70,
                'key' => 25
            ),
            "533 C" => array(
                'cyan' => 100,
                'magenta' => 83,
                'yellow' => 46,
                'key' => 13
            ),
            "534 C" => array(
                'cyan' => 100,
                'magenta' => 80,
                'yellow' => 30,
                'key' => 5
            ),
            "535 C" => array(
                'cyan' => 42,
                'magenta' => 27,
                'yellow' => 7,
                'key' => 0
            ),
            "536 C" => array(
                'cyan' => 31,
                'magenta' => 20,
                'yellow' => 5,
                'key' => 0
            ),
            "537 C" => array(
                'cyan' => 22,
                'magenta' => 12,
                'yellow' => 3,
                'key' => 0
            ),
            "538 C" => array(
                'cyan' => 12,
                'magenta' => 7,
                'yellow' => 2,
                'key' => 0
            ),
            "539 C" => array(
                'cyan' => 100,
                'magenta' => 49,
                'yellow' => 0,
                'key' => 70
            ),
            "540 C" => array(
                'cyan' => 100,
                'magenta' => 55,
                'yellow' => 0,
                'key' => 55
            ),
            "541 C" => array(
                'cyan' => 100,
                'magenta' => 57,
                'yellow' => 0,
                'key' => 38
            ),
            "542 C" => array(
                'cyan' => 62,
                'magenta' => 22,
                'yellow' => 0,
                'key' => 3
            ),
            "543 C" => array(
                'cyan' => 41,
                'magenta' => 11,
                'yellow' => 0,
                'key' => 0
            ),
            "544 C" => array(
                'cyan' => 30,
                'magenta' => 6,
                'yellow' => 0,
                'key' => 0
            ),
            "545 C" => array(
                'cyan' => 22,
                'magenta' => 3,
                'yellow' => 0,
                'key' => 0
            ),
            "5395 C" => array(
                'cyan' => 100,
                'magenta' => 44,
                'yellow' => 0,
                'key' => 76
            ),
            "5405 C" => array(
                'cyan' => 58,
                'magenta' => 17,
                'yellow' => 0,
                'key' => 46
            ),
            "5415 C" => array(
                'cyan' => 42,
                'magenta' => 8,
                'yellow' => 0,
                'key' => 40
            ),
            "5425 C" => array(
                'cyan' => 30,
                'magenta' => 4,
                'yellow' => 0,
                'key' => 31
            ),
            "5435 C" => array(
                'cyan' => 13,
                'magenta' => 3,
                'yellow' => 0,
                'key' => 17
            ),
            "5445 C" => array(
                'cyan' => 8,
                'magenta' => 1,
                'yellow' => 0,
                'key' => 13
            ),
            "5455 C" => array(
                'cyan' => 6,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 9
            ),
            "546 C" => array(
                'cyan' => 95,
                'magenta' => 9,
                'yellow' => 0,
                'key' => 83
            ),
            "547 C" => array(
                'cyan' => 100,
                'magenta' => 19,
                'yellow' => 0,
                'key' => 75
            ),
            "548 C" => array(
                'cyan' => 100,
                'magenta' => 24,
                'yellow' => 0,
                'key' => 64
            ),
            "549 C" => array(
                'cyan' => 52,
                'magenta' => 6,
                'yellow' => 0,
                'key' => 25
            ),
            "550 C" => array(
                'cyan' => 38,
                'magenta' => 4,
                'yellow' => 0,
                'key' => 19
            ),
            "551 C" => array(
                'cyan' => 27,
                'magenta' => 3,
                'yellow' => 0,
                'key' => 13
            ),
            "552 C" => array(
                'cyan' => 15,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 9
            ),
            "5463 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 18,
                'key' => 83
            ),
            "5473 C" => array(
                'cyan' => 82,
                'magenta' => 0,
                'yellow' => 28,
                'key' => 52
            ),
            "5483 C" => array(
                'cyan' => 62,
                'magenta' => 0,
                'yellow' => 21,
                'key' => 31
            ),
            "5493 C" => array(
                'cyan' => 43,
                'magenta' => 0,
                'yellow' => 14,
                'key' => 21
            ),
            "5503 C" => array(
                'cyan' => 29,
                'magenta' => 0,
                'yellow' => 10,
                'key' => 14
            ),
            "5513 C" => array(
                'cyan' => 18,
                'magenta' => 0,
                'yellow' => 7,
                'key' => 5
            ),
            "5523 C" => array(
                'cyan' => 11,
                'magenta' => 0,
                'yellow' => 5,
                'key' => 3
            ),
            "5467 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 33,
                'key' => 94
            ),
            "5477 C" => array(
                'cyan' => 55,
                'magenta' => 0,
                'yellow' => 27,
                'key' => 73
            ),
            "5487 C" => array(
                'cyan' => 35,
                'magenta' => 0,
                'yellow' => 16,
                'key' => 54
            ),
            "5497 C" => array(
                'cyan' => 17,
                'magenta' => 0,
                'yellow' => 9,
                'key' => 63
            ),
            "5507 C" => array(
                'cyan' => 10,
                'magenta' => 0,
                'yellow' => 6,
                'key' => 27
            ),
            "5517 C" => array(
                'cyan' => 8,
                'magenta' => 0,
                'yellow' => 5,
                'key' => 17
            ),
            "5527 C" => array(
                'cyan' => 6,
                'magenta' => 0,
                'yellow' => 4,
                'key' => 11
            ),
            "553 C" => array(
                'cyan' => 59,
                'magenta' => 0,
                'yellow' => 53,
                'key' => 80
            ),
            "554 C" => array(
                'cyan' => 78,
                'magenta' => 0,
                'yellow' => 63,
                'key' => 67
            ),
            "555 C" => array(
                'cyan' => 75,
                'magenta' => 0,
                'yellow' => 60,
                'key' => 55
            ),
            "556 C" => array(
                'cyan' => 42,
                'magenta' => 0,
                'yellow' => 33,
                'key' => 27
            ),
            "557 C" => array(
                'cyan' => 30,
                'magenta' => 0,
                'yellow' => 20,
                'key' => 15
            ),
            "558 C" => array(
                'cyan' => 19,
                'magenta' => 0,
                'yellow' => 14,
                'key' => 9
            ),
            "559 C" => array(
                'cyan' => 14,
                'magenta' => 0,
                'yellow' => 10,
                'key' => 6
            ),
            "5535 C" => array(
                'cyan' => 66,
                'magenta' => 0,
                'yellow' => 57,
                'key' => 82
            ),
            "5545 C" => array(
                'cyan' => 59,
                'magenta' => 0,
                'yellow' => 50,
                'key' => 52
            ),
            "5555 C" => array(
                'cyan' => 43,
                'magenta' => 0,
                'yellow' => 34,
                'key' => 38
            ),
            "5565 C" => array(
                'cyan' => 30,
                'magenta' => 0,
                'yellow' => 24,
                'key' => 26
            ),
            "5575 C" => array(
                'cyan' => 20,
                'magenta' => 0,
                'yellow' => 16,
                'key' => 17
            ),
            "5585 C" => array(
                'cyan' => 12,
                'magenta' => 0,
                'yellow' => 11,
                'key' => 10
            ),
            "5595 C" => array(
                'cyan' => 7,
                'magenta' => 0,
                'yellow' => 8,
                'key' => 7
            ),
            "560 C" => array(
                'cyan' => 80,
                'magenta' => 0,
                'yellow' => 63,
                'key' => 75
            ),
            "561 C" => array(
                'cyan' => 85,
                'magenta' => 0,
                'yellow' => 54,
                'key' => 52
            ),
            "562 C" => array(
                'cyan' => 85,
                'magenta' => 0,
                'yellow' => 50,
                'key' => 31
            ),
            "563 C" => array(
                'cyan' => 52,
                'magenta' => 0,
                'yellow' => 32,
                'key' => 1
            ),
            "564 C" => array(
                'cyan' => 37,
                'magenta' => 0,
                'yellow' => 20,
                'key' => 0
            ),
            "565 C" => array(
                'cyan' => 23,
                'magenta' => 0,
                'yellow' => 13,
                'key' => 0
            ),
            "566 C" => array(
                'cyan' => 14,
                'magenta' => 0,
                'yellow' => 10,
                'key' => 0
            ),
            "5605 C" => array(
                'cyan' => 65,
                'magenta' => 0,
                'yellow' => 56,
                'key' => 94
            ),
            "5615 C" => array(
                'cyan' => 49,
                'magenta' => 0,
                'yellow' => 44,
                'key' => 64
            ),
            "5625 C" => array(
                'cyan' => 28,
                'magenta' => 0,
                'yellow' => 29,
                'key' => 48
            ),
            "5635 C" => array(
                'cyan' => 13,
                'magenta' => 0,
                'yellow' => 18,
                'key' => 33
            ),
            "5645 C" => array(
                'cyan' => 7,
                'magenta' => 0,
                'yellow' => 11,
                'key' => 23
            ),
            "5655 C" => array(
                'cyan' => 6,
                'magenta' => 0,
                'yellow' => 9,
                'key' => 16
            ),
            "5665 C" => array(
                'cyan' => 5,
                'magenta' => 0,
                'yellow' => 7,
                'key' => 10
            ),
            "567 C" => array(
                'cyan' => 82,
                'magenta' => 0,
                'yellow' => 64,
                'key' => 70
            ),
            "568 C" => array(
                'cyan' => 88,
                'magenta' => 0,
                'yellow' => 57,
                'key' => 36
            ),
            "569 C" => array(
                'cyan' => 98,
                'magenta' => 0,
                'yellow' => 57,
                'key' => 17
            ),
            "570 C" => array(
                'cyan' => 48,
                'magenta' => 0,
                'yellow' => 29,
                'key' => 0
            ),
            "571 C" => array(
                'cyan' => 32,
                'magenta' => 0,
                'yellow' => 19,
                'key' => 0
            ),
            "572 C" => array(
                'cyan' => 23,
                'magenta' => 0,
                'yellow' => 14,
                'key' => 0
            ),
            "573 C" => array(
                'cyan' => 14,
                'magenta' => 0,
                'yellow' => 9,
                'key' => 0
            ),
            "574 C" => array(
                'cyan' => 34,
                'magenta' => 0,
                'yellow' => 81,
                'key' => 71
            ),
            "575 C" => array(
                'cyan' => 48,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 53
            ),
            "576 C" => array(
                'cyan' => 49,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 39
            ),
            "577 C" => array(
                'cyan' => 24,
                'magenta' => 0,
                'yellow' => 46,
                'key' => 10
            ),
            "578 C" => array(
                'cyan' => 20,
                'magenta' => 0,
                'yellow' => 40,
                'key' => 6
            ),
            "579 C" => array(
                'cyan' => 17,
                'magenta' => 0,
                'yellow' => 34,
                'key' => 3
            ),
            "580 C" => array(
                'cyan' => 12,
                'magenta' => 0,
                'yellow' => 26,
                'key' => 2
            ),
            "5743 C" => array(
                'cyan' => 33,
                'magenta' => 0,
                'yellow' => 85,
                'key' => 82
            ),
            "5753 C" => array(
                'cyan' => 25,
                'magenta' => 0,
                'yellow' => 81,
                'key' => 67
            ),
            "5763 C" => array(
                'cyan' => 16,
                'magenta' => 0,
                'yellow' => 74,
                'key' => 57
            ),
            "5773 C" => array(
                'cyan' => 9,
                'magenta' => 0,
                'yellow' => 43,
                'key' => 38
            ),
            "5783 C" => array(
                'cyan' => 6,
                'magenta' => 0,
                'yellow' => 28,
                'key' => 27
            ),
            "5793 C" => array(
                'cyan' => 4,
                'magenta' => 0,
                'yellow' => 21,
                'key' => 18
            ),
            "5803 C" => array(
                'cyan' => 2,
                'magenta' => 0,
                'yellow' => 12,
                'key' => 11
            ),
            "5747 C" => array(
                'cyan' => 32,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 79
            ),
            "5757 C" => array(
                'cyan' => 27,
                'magenta' => 0,
                'yellow' => 95,
                'key' => 55
            ),
            "5767 C" => array(
                'cyan' => 15,
                'magenta' => 0,
                'yellow' => 68,
                'key' => 39
            ),
            "5777 C" => array(
                'cyan' => 10,
                'magenta' => 0,
                'yellow' => 49,
                'key' => 28
            ),
            "5787 C" => array(
                'cyan' => 7,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 13
            ),
            "5797 C" => array(
                'cyan' => 5,
                'magenta' => 0,
                'yellow' => 24,
                'key' => 9
            ),
            "5807 C" => array(
                'cyan' => 2,
                'magenta' => 0,
                'yellow' => 14,
                'key' => 3
            ),
            "581 C" => array(
                'cyan' => 2,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 72
            ),
            "582 C" => array(
                'cyan' => 13,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 46
            ),
            "583 C" => array(
                'cyan' => 23,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 17
            ),
            "584 C" => array(
                'cyan' => 12,
                'magenta' => 0,
                'yellow' => 79,
                'key' => 6
            ),
            "585 C" => array(
                'cyan' => 11,
                'magenta' => 0,
                'yellow' => 66,
                'key' => 2
            ),
            "586 C" => array(
                'cyan' => 9,
                'magenta' => 0,
                'yellow' => 53,
                'key' => 0
            ),
            "587 C" => array(
                'cyan' => 5,
                'magenta' => 0,
                'yellow' => 40,
                'key' => 0
            ),
            "5815 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 91,
                'key' => 79
            ),
            "5825 C" => array(
                'cyan' => 0,
                'magenta' => 2,
                'yellow' => 87,
                'key' => 59
            ),
            "5835 C" => array(
                'cyan' => 0,
                'magenta' => 2,
                'yellow' => 67,
                'key' => 40
            ),
            "5845 C" => array(
                'cyan' => 0,
                'magenta' => 1,
                'yellow' => 47,
                'key' => 30
            ),
            "5855 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 31,
                'key' => 18
            ),
            "5865 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 25,
                'key' => 13
            ),
            "5875 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 26,
                'key' => 11
            ),
            "600 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 29,
                'key' => 0
            ),
            "601 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 40,
                'key' => 0
            ),
            "602 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 50,
                'key' => 0
            ),
            "603 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 69,
                'key' => 1
            ),
            "604 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 88,
                'key' => 3
            ),
            "605 C" => array(
                'cyan' => 0,
                'magenta' => 2,
                'yellow' => 100,
                'key' => 7
            ),
            "606 C" => array(
                'cyan' => 0,
                'magenta' => 4,
                'yellow' => 100,
                'key' => 12
            ),
            "607 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 18,
                'key' => 1
            ),
            "608 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 32,
                'key' => 2
            ),
            "609 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 46,
                'key' => 4
            ),
            "610 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 58,
                'key' => 6
            ),
            "611 C" => array(
                'cyan' => 0,
                'magenta' => 1,
                'yellow' => 92,
                'key' => 11
            ),
            "612 C" => array(
                'cyan' => 0,
                'magenta' => 2,
                'yellow' => 100,
                'key' => 20
            ),
            "613 C" => array(
                'cyan' => 0,
                'magenta' => 4,
                'yellow' => 100,
                'key' => 30
            ),
            "614 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 20,
                'key' => 4
            ),
            "615 C" => array(
                'cyan' => 0,
                'magenta' => 1,
                'yellow' => 27,
                'key' => 6
            ),
            "616 C" => array(
                'cyan' => 0,
                'magenta' => 2,
                'yellow' => 35,
                'key' => 9
            ),
            "617 C" => array(
                'cyan' => 0,
                'magenta' => 2,
                'yellow' => 48,
                'key' => 17
            ),
            "618 C" => array(
                'cyan' => 0,
                'magenta' => 3,
                'yellow' => 87,
                'key' => 30
            ),
            "619 C" => array(
                'cyan' => 0,
                'magenta' => 4,
                'yellow' => 100,
                'key' => 43
            ),
            "620 C" => array(
                'cyan' => 0,
                'magenta' => 5,
                'yellow' => 100,
                'key' => 53
            ),
            "621 C" => array(
                'cyan' => 13,
                'magenta' => 0,
                'yellow' => 10,
                'key' => 2
            ),
            "622 C" => array(
                'cyan' => 24,
                'magenta' => 0,
                'yellow' => 19,
                'key' => 4
            ),
            "623 C" => array(
                'cyan' => 32,
                'magenta' => 0,
                'yellow' => 24,
                'key' => 10
            ),
            "624 C" => array(
                'cyan' => 44,
                'magenta' => 0,
                'yellow' => 35,
                'key' => 20
            ),
            "625 C" => array(
                'cyan' => 56,
                'magenta' => 0,
                'yellow' => 44,
                'key' => 33
            ),
            "626 C" => array(
                'cyan' => 76,
                'magenta' => 0,
                'yellow' => 64,
                'key' => 62
            ),
            "627 C" => array(
                'cyan' => 90,
                'magenta' => 0,
                'yellow' => 75,
                'key' => 83
            ),
            "628 C" => array(
                'cyan' => 19,
                'magenta' => 0,
                'yellow' => 6,
                'key' => 0
            ),
            "629 C" => array(
                'cyan' => 34,
                'magenta' => 0,
                'yellow' => 9,
                'key' => 0
            ),
            "630 C" => array(
                'cyan' => 47,
                'magenta' => 0,
                'yellow' => 11,
                'key' => 0
            ),
            "631 C" => array(
                'cyan' => 67,
                'magenta' => 0,
                'yellow' => 12,
                'key' => 2
            ),
            "632 C" => array(
                'cyan' => 92,
                'magenta' => 0,
                'yellow' => 15,
                'key' => 5
            ),
            "633 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 10,
                'key' => 25
            ),
            "634 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 9,
                'key' => 40
            ),
            "635 C" => array(
                'cyan' => 32,
                'magenta' => 0,
                'yellow' => 8,
                'key' => 0
            ),
            "636 C" => array(
                'cyan' => 45,
                'magenta' => 0,
                'yellow' => 9,
                'key' => 0
            ),
            "637 C" => array(
                'cyan' => 55,
                'magenta' => 0,
                'yellow' => 9,
                'key' => 0
            ),
            "638 C" => array(
                'cyan' => 83,
                'magenta' => 0,
                'yellow' => 10,
                'key' => 0
            ),
            "639 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 5,
                'key' => 5
            ),
            "640 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 22
            ),
            "641 C" => array(
                'cyan' => 100,
                'magenta' => 4,
                'yellow' => 0,
                'key' => 30
            ),
            "642 C" => array(
                'cyan' => 16,
                'magenta' => 4,
                'yellow' => 0,
                'key' => 2
            ),
            "643 C" => array(
                'cyan' => 25,
                'magenta' => 7,
                'yellow' => 0,
                'key' => 4
            ),
            "644 C" => array(
                'cyan' => 42,
                'magenta' => 15,
                'yellow' => 0,
                'key' => 6
            ),
            "645 C" => array(
                'cyan' => 55,
                'magenta' => 24,
                'yellow' => 0,
                'key' => 9
            ),
            "646 C" => array(
                'cyan' => 65,
                'magenta' => 30,
                'yellow' => 0,
                'key' => 11
            ),
            "647 C" => array(
                'cyan' => 100,
                'magenta' => 56,
                'yellow' => 0,
                'key' => 23
            ),
            "648 C" => array(
                'cyan' => 100,
                'magenta' => 62,
                'yellow' => 0,
                'key' => 52
            ),
            "649 C" => array(
                'cyan' => 10,
                'magenta' => 4,
                'yellow' => 0,
                'key' => 1
            ),
            "650 C" => array(
                'cyan' => 24,
                'magenta' => 9,
                'yellow' => 0,
                'key' => 2
            ),
            "651 C" => array(
                'cyan' => 38,
                'magenta' => 18,
                'yellow' => 0,
                'key' => 6
            ),
            "652 C" => array(
                'cyan' => 50,
                'magenta' => 25,
                'yellow' => 0,
                'key' => 10
            ),
            "653 C" => array(
                'cyan' => 100,
                'magenta' => 62,
                'yellow' => 0,
                'key' => 20
            ),
            "654 C" => array(
                'cyan' => 100,
                'magenta' => 67,
                'yellow' => 0,
                'key' => 38
            ),
            "655 C" => array(
                'cyan' => 100,
                'magenta' => 68,
                'yellow' => 0,
                'key' => 52
            ),
            "656 C" => array(
                'cyan' => 14,
                'magenta' => 3,
                'yellow' => 0,
                'key' => 0
            ),
            "657 C" => array(
                'cyan' => 24,
                'magenta' => 7,
                'yellow' => 0,
                'key' => 0
            ),
            "658 C" => array(
                'cyan' => 30,
                'magenta' => 15,
                'yellow' => 0,
                'key' => 0
            ),
            "659 C" => array(
                'cyan' => 55,
                'magenta' => 30,
                'yellow' => 0,
                'key' => 0
            ),
            "660 C" => array(
                'cyan' => 90,
                'magenta' => 57,
                'yellow' => 0,
                'key' => 0
            ),
            "661 C" => array(
                'cyan' => 100,
                'magenta' => 69,
                'yellow' => 0,
                'key' => 9
            ),
            "662 C" => array(
                'cyan' => 100,
                'magenta' => 71,
                'yellow' => 0,
                'key' => 18
            ),
            "663 C" => array(
                'cyan' => 7,
                'magenta' => 6,
                'yellow' => 0,
                'key' => 0
            ),
            "664 C" => array(
                'cyan' => 11,
                'magenta' => 9,
                'yellow' => 0,
                'key' => 0
            ),
            "665 C" => array(
                'cyan' => 20,
                'magenta' => 17,
                'yellow' => 0,
                'key' => 2
            ),
            "666 C" => array(
                'cyan' => 31,
                'magenta' => 30,
                'yellow' => 0,
                'key' => 7
            ),
            "667 C" => array(
                'cyan' => 52,
                'magenta' => 49,
                'yellow' => 0,
                'key' => 14
            ),
            "668 C" => array(
                'cyan' => 65,
                'magenta' => 64,
                'yellow' => 0,
                'key' => 30
            ),
            "669 C" => array(
                'cyan' => 76,
                'magenta' => 78,
                'yellow' => 0,
                'key' => 47
            ),
            "670 C" => array(
                'cyan' => 0,
                'magenta' => 13,
                'yellow' => 0,
                'key' => 0
            ),
            "671 C" => array(
                'cyan' => 1,
                'magenta' => 20,
                'yellow' => 0,
                'key' => 0
            ),
            "672 C" => array(
                'cyan' => 3,
                'magenta' => 34,
                'yellow' => 0,
                'key' => 0
            ),
            "673 C" => array(
                'cyan' => 6,
                'magenta' => 49,
                'yellow' => 0,
                'key' => 0
            ),
            "674 C" => array(
                'cyan' => 9,
                'magenta' => 67,
                'yellow' => 0,
                'key' => 0
            ),
            "675 C" => array(
                'cyan' => 17,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 3
            ),
            "676 C" => array(
                'cyan' => 6,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 22
            ),
            "677 C" => array(
                'cyan' => 2,
                'magenta' => 13,
                'yellow' => 0,
                'key' => 0
            ),
            "678 C" => array(
                'cyan' => 3,
                'magenta' => 21,
                'yellow' => 0,
                'key' => 0
            ),
            "679 C" => array(
                'cyan' => 5,
                'magenta' => 27,
                'yellow' => 0,
                'key' => 0
            ),
            "680 C" => array(
                'cyan' => 10,
                'magenta' => 43,
                'yellow' => 0,
                'key' => 2
            ),
            "681 C" => array(
                'cyan' => 21,
                'magenta' => 61,
                'yellow' => 0,
                'key' => 4
            ),
            "682 C" => array(
                'cyan' => 25,
                'magenta' => 79,
                'yellow' => 0,
                'key' => 12
            ),
            "683 C" => array(
                'cyan' => 11,
                'magenta' => 100,
                'yellow' => 0,
                'key' => 43
            ),
            "684 C" => array(
                'cyan' => 0,
                'magenta' => 17,
                'yellow' => 0,
                'key' => 2
            ),
            "685 C" => array(
                'cyan' => 0,
                'magenta' => 25,
                'yellow' => 0,
                'key' => 3
            ),
            "686 C" => array(
                'cyan' => 0,
                'magenta' => 30,
                'yellow' => 0,
                'key' => 5
            ),
            "687 C" => array(
                'cyan' => 2,
                'magenta' => 44,
                'yellow' => 0,
                'key' => 12
            ),
            "688 C" => array(
                'cyan' => 5,
                'magenta' => 57,
                'yellow' => 0,
                'key' => 19
            ),
            "689 C" => array(
                'cyan' => 7,
                'magenta' => 77,
                'yellow' => 0,
                'key' => 34
            ),
            "690 C" => array(
                'cyan' => 0,
                'magenta' => 97,
                'yellow' => 0,
                'key' => 59
            ),
            "691 C" => array(
                'cyan' => 0,
                'magenta' => 15,
                'yellow' => 8,
                'key' => 1
            ),
            "692 C" => array(
                'cyan' => 0,
                'magenta' => 23,
                'yellow' => 10,
                'key' => 2
            ),
            "693 C" => array(
                'cyan' => 0,
                'magenta' => 30,
                'yellow' => 12,
                'key' => 6
            ),
            "694 C" => array(
                'cyan' => 0,
                'magenta' => 36,
                'yellow' => 21,
                'key' => 10
            ),
            "695 C" => array(
                'cyan' => 0,
                'magenta' => 50,
                'yellow' => 28,
                'key' => 20
            ),
            "696 C" => array(
                'cyan' => 0,
                'magenta' => 60,
                'yellow' => 36,
                'key' => 32
            ),
            "697 C" => array(
                'cyan' => 0,
                'magenta' => 68,
                'yellow' => 47,
                'key' => 42
            ),
            "698 C" => array(
                'cyan' => 0,
                'magenta' => 16,
                'yellow' => 8,
                'key' => 0
            ),
            "699 C" => array(
                'cyan' => 0,
                'magenta' => 24,
                'yellow' => 10,
                'key' => 0
            ),
            "700 C" => array(
                'cyan' => 0,
                'magenta' => 36,
                'yellow' => 14,
                'key' => 0
            ),
            "701 C" => array(
                'cyan' => 0,
                'magenta' => 45,
                'yellow' => 20,
                'key' => 0
            ),
            "702 C" => array(
                'cyan' => 0,
                'magenta' => 69,
                'yellow' => 34,
                'key' => 5
            ),
            "703 C" => array(
                'cyan' => 0,
                'magenta' => 83,
                'yellow' => 54,
                'key' => 16
            ),
            "704 C" => array(
                'cyan' => 0,
                'magenta' => 90,
                'yellow' => 72,
                'key' => 29
            ),
            "705 C" => array(
                'cyan' => 0,
                'magenta' => 9,
                'yellow' => 6,
                'key' => 0
            ),
            "706 C" => array(
                'cyan' => 0,
                'magenta' => 17,
                'yellow' => 10,
                'key' => 0
            ),
            "707 C" => array(
                'cyan' => 0,
                'magenta' => 30,
                'yellow' => 14,
                'key' => 0
            ),
            "708 C" => array(
                'cyan' => 0,
                'magenta' => 46,
                'yellow' => 22,
                'key' => 0
            ),
            "709 C" => array(
                'cyan' => 0,
                'magenta' => 66,
                'yellow' => 38,
                'key' => 0
            ),
            "710 C" => array(
                'cyan' => 0,
                'magenta' => 79,
                'yellow' => 58,
                'key' => 0
            ),
            "711 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 80,
                'key' => 2
            ),
            "712 C" => array(
                'cyan' => 0,
                'magenta' => 14,
                'yellow' => 31,
                'key' => 0
            ),
            "713 C" => array(
                'cyan' => 0,
                'magenta' => 19,
                'yellow' => 41,
                'key' => 0
            ),
            "714 C" => array(
                'cyan' => 0,
                'magenta' => 27,
                'yellow' => 55,
                'key' => 0
            ),
            "715 C" => array(
                'cyan' => 0,
                'magenta' => 36,
                'yellow' => 71,
                'key' => 0
            ),
            "716 C" => array(
                'cyan' => 0,
                'magenta' => 45,
                'yellow' => 91,
                'key' => 0
            ),
            "717 C" => array(
                'cyan' => 0,
                'magenta' => 53,
                'yellow' => 100,
                'key' => 2
            ),
            "718 C" => array(
                'cyan' => 0,
                'magenta' => 56,
                'yellow' => 100,
                'key' => 8
            ),
            "719 C" => array(
                'cyan' => 0,
                'magenta' => 10,
                'yellow' => 25,
                'key' => 0
            ),
            "720 C" => array(
                'cyan' => 0,
                'magenta' => 15,
                'yellow' => 36,
                'key' => 1
            ),
            "721 C" => array(
                'cyan' => 0,
                'magenta' => 24,
                'yellow' => 52,
                'key' => 3
            ),
            "722 C" => array(
                'cyan' => 0,
                'magenta' => 36,
                'yellow' => 76,
                'key' => 9
            ),
            "723 C" => array(
                'cyan' => 0,
                'magenta' => 43,
                'yellow' => 97,
                'key' => 17
            ),
            "724 C" => array(
                'cyan' => 0,
                'magenta' => 51,
                'yellow' => 100,
                'key' => 36
            ),
            "725 C" => array(
                'cyan' => 0,
                'magenta' => 53,
                'yellow' => 100,
                'key' => 48
            ),
            "726 C" => array(
                'cyan' => 0,
                'magenta' => 8,
                'yellow' => 23,
                'key' => 2
            ),
            "727 C" => array(
                'cyan' => 0,
                'magenta' => 15,
                'yellow' => 34,
                'key' => 5
            ),
            "728 C" => array(
                'cyan' => 0,
                'magenta' => 21,
                'yellow' => 48,
                'key' => 10
            ),
            "729 C" => array(
                'cyan' => 0,
                'magenta' => 31,
                'yellow' => 62,
                'key' => 18
            ),
            "730 C" => array(
                'cyan' => 0,
                'magenta' => 38,
                'yellow' => 78,
                'key' => 29
            ),
            "731 C" => array(
                'cyan' => 0,
                'magenta' => 52,
                'yellow' => 100,
                'key' => 54
            ),
            "732 C" => array(
                'cyan' => 0,
                'magenta' => 55,
                'yellow' => 100,
                'key' => 64
            ),
            "7401 C" => array(
                'cyan' => 0,
                'magenta' => 4,
                'yellow' => 18,
                'key' => 0
            ),
            "7402 C" => array(
                'cyan' => 0,
                'magenta' => 6,
                'yellow' => 30,
                'key' => 0
            ),
            "7403 C" => array(
                'cyan' => 0,
                'magenta' => 10,
                'yellow' => 50,
                'key' => 0
            ),
            "7404 C" => array(
                'cyan' => 0,
                'magenta' => 9,
                'yellow' => 79,
                'key' => 0
            ),
            "7405 C" => array(
                'cyan' => 0,
                'magenta' => 10,
                'yellow' => 99,
                'key' => 0
            ),
            "7406 C" => array(
                'cyan' => 0,
                'magenta' => 18,
                'yellow' => 100,
                'key' => 0
            ),
            "7407 C" => array(
                'cyan' => 0,
                'magenta' => 22,
                'yellow' => 85,
                'key' => 11
            ),
            "7408 C" => array(
                'cyan' => 0,
                'magenta' => 25,
                'yellow' => 95,
                'key' => 0
            ),
            "7409 C" => array(
                'cyan' => 0,
                'magenta' => 30,
                'yellow' => 95,
                'key' => 0
            ),
            "7410 C" => array(
                'cyan' => 0,
                'magenta' => 30,
                'yellow' => 55,
                'key' => 0
            ),
            "7411 C" => array(
                'cyan' => 0,
                'magenta' => 35,
                'yellow' => 69,
                'key' => 0
            ),
            "7412 C" => array(
                'cyan' => 0,
                'magenta' => 42,
                'yellow' => 100,
                'key' => 7
            ),
            "7413 C" => array(
                'cyan' => 0,
                'magenta' => 53,
                'yellow' => 100,
                'key' => 4
            ),
            "7414 C" => array(
                'cyan' => 0,
                'magenta' => 46,
                'yellow' => 100,
                'key' => 11
            ),
            "7415 C" => array(
                'cyan' => 0,
                'magenta' => 18,
                'yellow' => 15,
                'key' => 0
            ),
            "7416 C" => array(
                'cyan' => 0,
                'magenta' => 60,
                'yellow' => 60,
                'key' => 0
            ),
            "7417 C" => array(
                'cyan' => 0,
                'magenta' => 75,
                'yellow' => 75,
                'key' => 0
            ),
            "7418 C" => array(
                'cyan' => 0,
                'magenta' => 70,
                'yellow' => 60,
                'key' => 5
            ),
            "7419 C" => array(
                'cyan' => 0,
                'magenta' => 60,
                'yellow' => 45,
                'key' => 18
            ),
            "7420 C" => array(
                'cyan' => 0,
                'magenta' => 80,
                'yellow' => 42,
                'key' => 20
            ),
            "7421 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 30,
                'key' => 61
            ),
            "7422 C" => array(
                'cyan' => 0,
                'magenta' => 9,
                'yellow' => 5,
                'key' => 0
            ),
            "7423 C" => array(
                'cyan' => 0,
                'magenta' => 55,
                'yellow' => 23,
                'key' => 0
            ),
            "7424 C" => array(
                'cyan' => 0,
                'magenta' => 75,
                'yellow' => 30,
                'key' => 0
            ),
            "7425 C" => array(
                'cyan' => 0,
                'magenta' => 90,
                'yellow' => 30,
                'key' => 7
            ),
            "7426 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 45,
                'key' => 18
            ),
            "7427 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 65,
                'key' => 28
            ),
            "7428 C" => array(
                'cyan' => 0,
                'magenta' => 80,
                'yellow' => 45,
                'key' => 55
            ),
            "7429 C" => array(
                'cyan' => 0,
                'magenta' => 18,
                'yellow' => 3,
                'key' => 0
            ),
            "7430 C" => array(
                'cyan' => 2,
                'magenta' => 31,
                'yellow' => 0,
                'key' => 0
            ),
            "7431 C" => array(
                'cyan' => 0,
                'magenta' => 38,
                'yellow' => 2,
                'key' => 5
            ),
            "7432 C" => array(
                'cyan' => 0,
                'magenta' => 55,
                'yellow' => 3,
                'key' => 10
            ),
            "7433 C" => array(
                'cyan' => 0,
                'magenta' => 75,
                'yellow' => 15,
                'key' => 15
            ),
            "7434 C" => array(
                'cyan' => 0,
                'magenta' => 80,
                'yellow' => 15,
                'key' => 20
            ),
            "7435 C" => array(
                'cyan' => 0,
                'magenta' => 100,
                'yellow' => 10,
                'key' => 35
            ),
            "7436 C" => array(
                'cyan' => 3,
                'magenta' => 8,
                'yellow' => 0,
                'key' => 0
            ),
            "7437 C" => array(
                'cyan' => 6,
                'magenta' => 20,
                'yellow' => 0,
                'key' => 0
            ),
            "7438 C" => array(
                'cyan' => 15,
                'magenta' => 35,
                'yellow' => 0,
                'key' => 0
            ),
            "7439 C" => array(
                'cyan' => 20,
                'magenta' => 35,
                'yellow' => 0,
                'key' => 0
            ),
            "7440 C" => array(
                'cyan' => 30,
                'magenta' => 40,
                'yellow' => 0,
                'key' => 0
            ),
            "7441 C" => array(
                'cyan' => 36,
                'magenta' => 50,
                'yellow' => 0,
                'key' => 0
            ),
            "7442 C" => array(
                'cyan' => 50,
                'magenta' => 70,
                'yellow' => 0,
                'key' => 0
            ),
            "7443 C" => array(
                'cyan' => 6,
                'magenta' => 5,
                'yellow' => 0,
                'key' => 0
            ),
            "7444 C" => array(
                'cyan' => 20,
                'magenta' => 17,
                'yellow' => 0,
                'key' => 0
            ),
            "7445 C" => array(
                'cyan' => 30,
                'magenta' => 20,
                'yellow' => 0,
                'key' => 3
            ),
            "7446 C" => array(
                'cyan' => 43,
                'magenta' => 38,
                'yellow' => 0,
                'key' => 0
            ),
            "7447 C" => array(
                'cyan' => 60,
                'magenta' => 58,
                'yellow' => 0,
                'key' => 19
            ),
            "7448 C" => array(
                'cyan' => 32,
                'magenta' => 42,
                'yellow' => 0,
                'key' => 55
            ),
            "7449 C" => array(
                'cyan' => 72,
                'magenta' => 100,
                'yellow' => 77,
                'key' => 40
            ),
            "7450 C" => array(
                'cyan' => 20,
                'magenta' => 10,
                'yellow' => 0,
                'key' => 0
            ),
            "7451 C" => array(
                'cyan' => 40,
                'magenta' => 21,
                'yellow' => 0,
                'key' => 0
            ),
            "7452 C" => array(
                'cyan' => 50,
                'magenta' => 32,
                'yellow' => 0,
                'key' => 0
            ),
            "7453 C" => array(
                'cyan' => 50,
                'magenta' => 26,
                'yellow' => 0,
                'key' => 0
            ),
            "7454 C" => array(
                'cyan' => 50,
                'magenta' => 24,
                'yellow' => 0,
                'key' => 10
            ),
            "7455 C" => array(
                'cyan' => 80,
                'magenta' => 53,
                'yellow' => 0,
                'key' => 0
            ),
            "7456 C" => array(
                'cyan' => 55,
                'magenta' => 35,
                'yellow' => 0,
                'key' => 7
            ),
            "7457 C" => array(
                'cyan' => 12,
                'magenta' => 0,
                'yellow' => 2,
                'key' => 0
            ),
            "7458 C" => array(
                'cyan' => 40,
                'magenta' => 0,
                'yellow' => 5,
                'key' => 6
            ),
            "7459 C" => array(
                'cyan' => 57,
                'magenta' => 0,
                'yellow' => 6,
                'key' => 13
            ),
            "7460 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 5
            ),
            "7461 C" => array(
                'cyan' => 78,
                'magenta' => 28,
                'yellow' => 0,
                'key' => 0
            ),
            "7462 C" => array(
                'cyan' => 100,
                'magenta' => 50,
                'yellow' => 0,
                'key' => 10
            ),
            "7463 C" => array(
                'cyan' => 100,
                'magenta' => 43,
                'yellow' => 0,
                'key' => 65
            ),
            "7464 C" => array(
                'cyan' => 25,
                'magenta' => 0,
                'yellow' => 10,
                'key' => 0
            ),
            "7465 C" => array(
                'cyan' => 50,
                'magenta' => 0,
                'yellow' => 25,
                'key' => 0
            ),
            "7466 C" => array(
                'cyan' => 70,
                'magenta' => 0,
                'yellow' => 23,
                'key' => 0
            ),
            "7467 C" => array(
                'cyan' => 95,
                'magenta' => 0,
                'yellow' => 25,
                'key' => 0
            ),
            "7468 C" => array(
                'cyan' => 100,
                'magenta' => 10,
                'yellow' => 0,
                'key' => 28
            ),
            "7469 C" => array(
                'cyan' => 100,
                'magenta' => 20,
                'yellow' => 0,
                'key' => 40
            ),
            "7470 C" => array(
                'cyan' => 80,
                'magenta' => 15,
                'yellow' => 0,
                'key' => 45
            ),
            "7471 C" => array(
                'cyan' => 28,
                'magenta' => 0,
                'yellow' => 14,
                'key' => 0
            ),
            "7472 C" => array(
                'cyan' => 52,
                'magenta' => 0,
                'yellow' => 25,
                'key' => 0
            ),
            "7473 C" => array(
                'cyan' => 70,
                'magenta' => 0,
                'yellow' => 38,
                'key' => 8
            ),
            "7474 C" => array(
                'cyan' => 90,
                'magenta' => 0,
                'yellow' => 28,
                'key' => 22
            ),
            "7475 C" => array(
                'cyan' => 50,
                'magenta' => 0,
                'yellow' => 25,
                'key' => 30
            ),
            "7476 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 43,
                'key' => 60
            ),
            "7477 C" => array(
                'cyan' => 80,
                'magenta' => 0,
                'yellow' => 10,
                'key' => 68
            ),
            "7478 C" => array(
                'cyan' => 18,
                'magenta' => 0,
                'yellow' => 14,
                'key' => 0
            ),
            "7479 C" => array(
                'cyan' => 55,
                'magenta' => 0,
                'yellow' => 50,
                'key' => 0
            ),
            "7480 C" => array(
                'cyan' => 60,
                'magenta' => 0,
                'yellow' => 50,
                'key' => 0
            ),
            "7481 C" => array(
                'cyan' => 60,
                'magenta' => 0,
                'yellow' => 55,
                'key' => 0
            ),
            "7482 C" => array(
                'cyan' => 80,
                'magenta' => 0,
                'yellow' => 75,
                'key' => 0
            ),
            "7483 C" => array(
                'cyan' => 85,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 55
            ),
            "7484 C" => array(
                'cyan' => 100,
                'magenta' => 0,
                'yellow' => 85,
                'key' => 50
            ),
            "7485 C" => array(
                'cyan' => 6,
                'magenta' => 0,
                'yellow' => 10,
                'key' => 0
            ),
            "7486 C" => array(
                'cyan' => 20,
                'magenta' => 0,
                'yellow' => 30,
                'key' => 0
            ),
            "7487 C" => array(
                'cyan' => 30,
                'magenta' => 0,
                'yellow' => 45,
                'key' => 0
            ),
            "7488 C" => array(
                'cyan' => 43,
                'magenta' => 0,
                'yellow' => 60,
                'key' => 0
            ),
            "7489 C" => array(
                'cyan' => 60,
                'magenta' => 0,
                'yellow' => 80,
                'key' => 7
            ),
            "7490 C" => array(
                'cyan' => 45,
                'magenta' => 0,
                'yellow' => 80,
                'key' => 35
            ),
            "7491 C" => array(
                'cyan' => 32,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 40
            ),
            "7492 C" => array(
                'cyan' => 12,
                'magenta' => 0,
                'yellow' => 50,
                'key' => 7
            ),
            "7493 C" => array(
                'cyan' => 14,
                'magenta' => 0,
                'yellow' => 36,
                'key' => 10
            ),
            "7494 C" => array(
                'cyan' => 25,
                'magenta' => 0,
                'yellow' => 40,
                'key' => 15
            ),
            "7495 C" => array(
                'cyan' => 25,
                'magenta' => 0,
                'yellow' => 80,
                'key' => 30
            ),
            "7496 C" => array(
                'cyan' => 40,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 38
            ),
            "7497 C" => array(
                'cyan' => 40,
                'magenta' => 30,
                'yellow' => 70,
                'key' => 25
            ),
            "7498 C" => array(
                'cyan' => 25,
                'magenta' => 0,
                'yellow' => 100,
                'key' => 80
            ),
            "7499 C" => array(
                'cyan' => 0,
                'magenta' => 2,
                'yellow' => 15,
                'key' => 0
            ),
            "7500 C" => array(
                'cyan' => 0,
                'magenta' => 2,
                'yellow' => 15,
                'key' => 3
            ),
            "7501 C" => array(
                'cyan' => 0,
                'magenta' => 4,
                'yellow' => 20,
                'key' => 6
            ),
            "7502 C" => array(
                'cyan' => 0,
                'magenta' => 8,
                'yellow' => 35,
                'key' => 10
            ),
            "7503 C" => array(
                'cyan' => 0,
                'magenta' => 12,
                'yellow' => 35,
                'key' => 25
            ),
            "7504 C" => array(
                'cyan' => 0,
                'magenta' => 25,
                'yellow' => 45,
                'key' => 40
            ),
            "7505 C" => array(
                'cyan' => 0,
                'magenta' => 30,
                'yellow' => 70,
                'key' => 55
            ),
            "7506 C" => array(
                'cyan' => 0,
                'magenta' => 5,
                'yellow' => 15,
                'key' => 0
            ),
            "7507 C" => array(
                'cyan' => 0,
                'magenta' => 10,
                'yellow' => 30,
                'key' => 0
            ),
            "7508 C" => array(
                'cyan' => 0,
                'magenta' => 15,
                'yellow' => 40,
                'key' => 4
            ),
            "7509 C" => array(
                'cyan' => 0,
                'magenta' => 20,
                'yellow' => 50,
                'key' => 5
            ),
            "7510 C" => array(
                'cyan' => 0,
                'magenta' => 30,
                'yellow' => 72,
                'key' => 11
            ),
            "7511 C" => array(
                'cyan' => 0,
                'magenta' => 45,
                'yellow' => 100,
                'key' => 25
            ),
            "7512 C" => array(
                'cyan' => 0,
                'magenta' => 46,
                'yellow' => 100,
                'key' => 33
            ),
            "7513 C" => array(
                'cyan' => 0,
                'magenta' => 18,
                'yellow' => 28,
                'key' => 3
            ),
            "7514 C" => array(
                'cyan' => 0,
                'magenta' => 24,
                'yellow' => 38,
                'key' => 5
            ),
            "7515 C" => array(
                'cyan' => 0,
                'magenta' => 35,
                'yellow' => 50,
                'key' => 12
            ),
            "7516 C" => array(
                'cyan' => 0,
                'magenta' => 52,
                'yellow' => 100,
                'key' => 35
            ),
            "7517 C" => array(
                'cyan' => 0,
                'magenta' => 60,
                'yellow' => 100,
                'key' => 44
            ),
            "7518 C" => array(
                'cyan' => 0,
                'magenta' => 40,
                'yellow' => 55,
                'key' => 60
            ),
            "7519 C" => array(
                'cyan' => 50,
                'magenta' => 60,
                'yellow' => 100,
                'key' => 48
            ),
            "7520 C" => array(
                'cyan' => 0,
                'magenta' => 16,
                'yellow' => 19,
                'key' => 0
            ),
            "7521 C" => array(
                'cyan' => 0,
                'magenta' => 25,
                'yellow' => 20,
                'key' => 10
            ),
            "7522 C" => array(
                'cyan' => 0,
                'magenta' => 40,
                'yellow' => 30,
                'key' => 16
            ),
            "7523 C" => array(
                'cyan' => 0,
                'magenta' => 40,
                'yellow' => 35,
                'key' => 20
            ),
            "7524 C" => array(
                'cyan' => 0,
                'magenta' => 55,
                'yellow' => 60,
                'key' => 27
            ),
            "7525 C" => array(
                'cyan' => 0,
                'magenta' => 45,
                'yellow' => 50,
                'key' => 30
            ),
            "7526 C" => array(
                'cyan' => 0,
                'magenta' => 65,
                'yellow' => 100,
                'key' => 35
            ),
            "7527 C" => array(
                'cyan' => 0,
                'magenta' => 2,
                'yellow' => 6,
                'key' => 7
            ),
            "7528 C" => array(
                'cyan' => 0,
                'magenta' => 3,
                'yellow' => 10,
                'key' => 10
            ),
            "7529 C" => array(
                'cyan' => 0,
                'magenta' => 4,
                'yellow' => 12,
                'key' => 17
            ),
            "7530 C" => array(
                'cyan' => 0,
                'magenta' => 8,
                'yellow' => 21,
                'key' => 32
            ),
            "7531 C" => array(
                'cyan' => 0,
                'magenta' => 10,
                'yellow' => 27,
                'key' => 50
            ),
            "7532 C" => array(
                'cyan' => 0,
                'magenta' => 17,
                'yellow' => 50,
                'key' => 65
            ),
            "7533 C" => array(
                'cyan' => 0,
                'magenta' => 22,
                'yellow' => 85,
                'key' => 85
            ),
            "7534 C" => array(
                'cyan' => 0,
                'magenta' => 2,
                'yellow' => 8,
                'key' => 10
            ),
            "7535 C" => array(
                'cyan' => 0,
                'magenta' => 3,
                'yellow' => 15,
                'key' => 20
            ),
            "7536 C" => array(
                'cyan' => 0,
                'magenta' => 4,
                'yellow' => 22,
                'key' => 32
            ),
            "7537 C" => array(
                'cyan' => 3,
                'magenta' => 0,
                'yellow' => 10,
                'key' => 20
            ),
            "7538 C" => array(
                'cyan' => 9,
                'magenta' => 0,
                'yellow' => 13,
                'key' => 30
            ),
            "7539 C" => array(
                'cyan' => 2,
                'magenta' => 0,
                'yellow' => 9,
                'key' => 36
            ),
            "7540 C" => array(
                'cyan' => 0,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 72
            ),
            "7541 C" => array(
                'cyan' => 2,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 5
            ),
            "7542 C" => array(
                'cyan' => 10,
                'magenta' => 0,
                'yellow' => 3,
                'key' => 16
            ),
            "7543 C" => array(
                'cyan' => 7,
                'magenta' => 0,
                'yellow' => 0,
                'key' => 30
            ),
            "7544 C" => array(
                'cyan' => 10,
                'magenta' => 1,
                'yellow' => 0,
                'key' => 40
            ),
            "7545 C" => array(
                'cyan' => 23,
                'magenta' => 2,
                'yellow' => 0,
                'key' => 63
            ),
            "7546 C" => array(
                'cyan' => 33,
                'magenta' => 4,
                'yellow' => 0,
                'key' => 72
            ),
            "7547 C" => array(
                'cyan' => 35,
                'magenta' => 4,
                'yellow' => 0,
                'key' => 94
            ),
        );
        return $pantone_pallete;
    }

}
