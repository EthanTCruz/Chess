package testStack;

import java.util.Arrays;

import org.junit.jupiter.api.Test;

import boardFunctions.Play;

class QTest {


	@Test
	public void Q_Test() {
		Play.showBoard();
		Play.setCurr('W');
		int [] moves = Play.allPosMoves(Play.getCurr());
		System.out.println(Arrays.toString(moves) + moves.length);
		int [] QW = Play.showMoves(5,2);
		System.out.println(Arrays.toString(QW) + QW.length);
		Play.dispMoves(QW);
		Play.move(5,2,6,3);
		Play.showBoard();
		Play.dispMoves(QW);
	}
	


}
