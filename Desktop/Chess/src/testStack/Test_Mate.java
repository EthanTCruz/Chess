package testStack;

import static org.junit.jupiter.api.Assertions.*;

import java.util.Arrays;

import org.junit.jupiter.api.Test;

import boardFunctions.Play;

class Test_Mate {

	@Test
	public void testMate() {
		
		Play.showBoard();
		Play.move(5,2,5,7);
		Play.showBoard();
		System.out.println(Play.kingCheck());
		Play.move(1,7,1,5);
		Play.showBoard();
		System.out.println(Arrays.toString(Play.getLog()) + Play.gameOver());
		Play.move(5,7,5,8);
		System.out.println(Arrays.toString(Play.getLog()) + Play.gameOver());
		Play.showBoard();
		
	}


}
