package testStack;

import static org.junit.jupiter.api.Assertions.*;

import java.util.Arrays;

import org.junit.jupiter.api.Test;

import boardFunctions.Play;

class resetTest {

	
	@Test
	public void reset_Test() {
		Play.showBoard();
		Play.resetBoard();
		Play.showBoard();
		
	}

}
