import java.io.IOException;

public class mainclass {

	public static void main(String[] args) {
		// Check for Public IP Address
		try {
			Data.currentClientIP = IPChecker.checkWithAmazonAWS();
			System.out.println("Scanned Public IP: " + Data.currentClientIP);
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		for(int i = 0; i < args.length; i++) {
			// Set URL from Parameter
			if(args[i].equals("-url")) {
				Data.URL = args[i+1];
				System.out.println("URL Set to: " + Data.URL);
			}
		}
		
	}

}
