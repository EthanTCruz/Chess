package testStack;

import static org.junit.Assert.assertEquals;

import java.io.ByteArrayOutputStream;
import java.io.PrintStream;

import org.junit.After;
import org.junit.Before;
import org.junit.jupiter.api.Test;

import boardFunctions.Play;

class Ptest {

	private final ByteArrayOutputStream outContent = new ByteArrayOutputStream();
	private final ByteArrayOutputStream errContent = new ByteArrayOutputStream();
	private final PrintStream originalOut = System.out;
	private final PrintStream originalErr = System.err;

	@Before
	public void setUpStreams() {
	    System.setOut(new PrintStream(outContent));
	    System.setErr(new PrintStream(errContent));
	    		
	}

	static String normalOut = "";
	
	
	@Test
	public void PTest() {
	Play.showBoard();
	Play.move(8,2,8,4);
	Play.showBoard();
	Play.move(5,7,5,2);
	Play.showBoard();
	Play.move(8,4,8,5);
	Play.showBoard();
	
	Play.resetBoard();
	Play.showBoard();
	Play.move(5,2,5,3);
	Play.showBoard();
	Play.move(5,7,5,5);
	Play.showBoard();
	Play.move(5,3,5,4);
	Play.showBoard();
	
	Play.resetBoard();
	Play.showBoard();
	Play.move(8,2,8,4);
	Play.showBoard();
	Play.move(5,7,5,5);
	Play.showBoard();
	Play.move(8,4,8,5);
	Play.showBoard();

	System.out.print("\033[2J");

//	assertEquals(normalOut, outContent.toString());

	
	}
	
	@After
	public void restoreStreams() {
	    System.setOut(originalOut);
	    System.setErr(originalErr);
	}


}
