<?php
		/**
		*@var массив пар
		*/
		$arr = $_POST['mas'];
		$arr = preg_split("/[\n]/", $arr);	
		/**
		*@var кол-во пар
		*/
		$p = count($arr);
		$show = true;
		
		/* проверка введенных пар */
		for ($i = 0; $i < count($arr); $i++){
			$arr[$i] = trim($arr[$i]);
			$arr[$i] = preg_split("/[\s,]+/", $arr[$i]);
			if (count($arr[$i]) != 2) {
				echo "Пара ";
				echo ($i + 1);
				echo " введена неверно";
				$show = false;
				break;
			}
			if ($arr[$i][0] < 0 || $arr[$i][1] < 0) {
				echo "Введено отрицательное число";
				$show = false;
				break;
			}
		}
		
		if($show) {
			$n = $arr[0][0];
			for($k = 0; $k < $p; $k++) {
				if ($arr[$k][0] > $n) {
					$n = $arr[$k][0];
				}
				if ($arr[$k][1] > $n) {
					$n = $arr[$k][1];
				}
			}
			
			$n += 1;
			$mas = array();						//перевод в двумерный массив
			$temp = array();
			$res = array();
			$i = 0;
			$j = 0;
			for ($i = 0; $i < $n; $i++){
				$mas[$i] = array();
				$res[$i] = array();
				$temp[$i] = array();
				for ($j = 0; $j < $n; $j++){
					$mas[$i][$j] = 0;
					$res[$i][$j] = 0;
					$temp[$i][$j] = 0;
					if($i == $j) {
						$res[$i][$j] = 1;
					}			
				}	
			}
			
			for ($i = 0; $i < $p; $i++) {
				$ti = $arr[$i][0];
				$tj = $arr[$i][1];
				$mas[$ti][$tj] = 1;
				$temp[$ti][$tj] = 1;
			}
			
			for($k = 0; $k < $n; $k++) {
				for ($i = 0; $i < $n; $i++) {					//возведение матрицы в степень n-1
					for ($j = 0; $j < $n; $j++) {
						for ($z = 0; $z < $n; $z++) {
							$temp[$i][$j] += $temp[$i][$z] * $mas[$z][$j];
						}
						if ($temp[$i][$j] > 1) {
							$temp[$i][$j] = 1;
						}
					}		
				}
				
				for ($i = 0; $i < $n; $i++) {				
					for ($j = 0; $j < $n; $j++) {
						$res[$i][$j] += $temp[$i][$j];
						if ($res[$i][$j] > 1) {
							$res[$i][$j] = 1;
						}
					}		
				}
			}

			$k = 0;
			echo("Матрица достижимости: <br>");
			$html = '<table>';
			for ($i = 0; $i < $n; $i++){
				$html .= '<tr>';
				for ($j = 0; $j < $n; $j++){
					$html .= '<td> <input type="number" name="cell[]" min="-1" max="10000" value="'.$res[$i][$j].'"></td>';						
				}
				$html .= '</tr>';       
			}
			$html .= '</table>';
			$html .= '<br>';
			
			echo "$html";
		}
?>