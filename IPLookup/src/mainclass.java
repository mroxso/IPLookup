import java.io.IOException;

public class mainclass {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		try {
			Data.currentClientIP = IPChecker.checkWithAmazonAWS();
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		System.out.println(Data.currentClientIP);
		
	}

}
